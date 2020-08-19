<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class Category extends Model
{
    /**
     * Возвращает все продукты из текущей категории
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function partner()
    {
        return $this->belongsTo('App\Partner', 'store_id', 'id');
    }

    public function parentCategory()
    {
        return $this->belongsTo('App\Category', 'parent', 'id');
    }

    public function childCategories()
    {
        return $this->hasMany('App\Category', 'parent', 'id');
    }

    public function setParent($parentId)
    {
        if ($parentId == 0) {
            $this->parent = null;
        } else {
            Category::findOrFail($parentId);
            $this->parent = $parentId;
        }
    }

    public function getBreadcrumbs()
    {
        $result = [];
        $parent = $this->parentCategory;
        if ($parent) {
            $parentBreadcrumbs = $parent->getBreadcrumbs();
            if ($parentBreadcrumbs) {
                $result = array_merge($parentBreadcrumbs, [$this->friendly_url_name => $this->name]);
                return $result;
            } else {
                return [$this->friendly_url_name => $this->name];
            }
        } else {
            return [$this->friendly_url_name => $this->name];
        }
    }

    public static function getCatalog($storeId)
    {
        $cacheKey = 'catalog:' . $storeId;
        $cachedCatalog = Redis::get($cacheKey);
        if ($cachedCatalog) {
            return unserialize($cachedCatalog);
        }
        $categoriesToDisplay = self::getNonEmptyCategoryIds($storeId);
        $groupedCategories = Category::whereNull('parse_url')->whereIn('id', $categoriesToDisplay)->orderBy('parent')->orderBy('name')->get()->groupBy('parent');
        Redis::set($cacheKey, serialize($groupedCategories), 'EX', 60 * 10);
        return $groupedCategories;
    }

    public static function getNonEmptyCategoryIds($storeId)
    {
        $categoryParents = Category::whereNull('parse_url')->get()->pluck('parent', 'id')->toArray();
        $productsInCategory = DB::table('products')
            ->select(DB::raw('count(*) as count, category_id'))
            ->where('store_id', $storeId)
            ->groupBy('category_id')
            ->get()
            ->pluck('count', 'category_id')
            ->toArray();

        $categoriesToDisplay = [];
        foreach ($productsInCategory as $categoryId => $count) {
            $categoriesToDisplay = array_merge($categoriesToDisplay, self::getParentIds($categoryId, $categoryParents));
        }
        return $categoriesToDisplay;
    }

    public static function getParentIds($parentCategoryId, $allCategories)
    {
        if (!isset($allCategories[$parentCategoryId]) || is_null($allCategories[$parentCategoryId])) {
            return [$parentCategoryId];
        } else {
            return array_merge([$parentCategoryId], self::getParentIds($allCategories[$parentCategoryId], $allCategories));
        }
    }

    public function getChildCategoryIds()
    {
        $categoryIds = [];
        $childCategories = $this->childCategories;
        foreach ($childCategories as $child) {
            $categoryIds = array_merge([$child->id], $child->getChildCategoryIds());
        }
        return $categoryIds;
    }

    public function productsWithChildQuery($storeId)
    {
        $childCategories = $this->getChildCategoryIds();
        return Product::whereIn('category_id', array_merge([$this->id], $childCategories));
    }
}

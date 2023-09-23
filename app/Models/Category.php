<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
                $result = array_merge($parentBreadcrumbs, [$this->name]);
                return $result;
            } else {
                return [$this->name];
            }
        } else {
            return [$this->name];
        }
    }
}

<?php

namespace App;

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
        return $this->belongsTo('App\Category', 'id', 'parent');
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
}

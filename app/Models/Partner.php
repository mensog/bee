<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public function products()
    {
        return $this->hasMany('App\Product', 'store_id');
    }
}

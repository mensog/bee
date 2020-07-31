<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivateAccount extends Model
{
    public function user()
    {
        return $this->hasOne('App\User');
    }
}

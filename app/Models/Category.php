<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $gaurded = [];

    public function subCategories()
    {
        return $this->hasMany(\App\Models\SubCategory::class);
    }
}

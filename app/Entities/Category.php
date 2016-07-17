<?php

namespace CityUGE\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'category_course');
    }
}

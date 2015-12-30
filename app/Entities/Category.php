<?php


namespace CityUGE\Entities;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function courses()
    {
        return $this->belongsToMany('CityUGE\Entities\Course', 'category_course');
    }
}

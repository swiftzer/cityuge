<?php

namespace CityUGE\Entities;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    public function meta()
    {
        return $this->hasMany('CityUGE\Entities\CourseMeta');
    }

    public function department()
    {
        return $this->belongsTo('CityUGE\Entities\Department');
    }

    public function categories()
    {
        return $this->belongsToMany('CityUGE\Entities\Category', 'category_course');
    }
    
    public function reviews()
    {
        return $this->hasMany('CityUGE\Entities\Review');
    }
    
    public function stats()
    {
        return $this->hasMany('CityUGE\Entities\AimsStats');
    }
    
    public function offerings()
    {
        return $this->hasMany('CityUGE\Entities\Offering');
    }
}

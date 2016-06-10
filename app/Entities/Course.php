<?php

namespace CityUGE\Entities;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    public function getRouteKeyName()
    {
        return 'course_code';
    }

    public function meta()
    {
        return $this->hasMany(CourseMeta::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_course');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function stats()
    {
        return $this->hasMany(AimsStats::class);
    }

    public function offerings()
    {
        return $this->hasMany(Offering::class);
    }
}

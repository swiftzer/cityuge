<?php

namespace CityUGE\Entities;

use Illuminate\Database\Eloquent\Model;
use DB;
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

    public function semesters()
    {
        return $this->belongsToMany(Semester::class, 'offerings');
    }
    public static function getList()
    {
        return static::select(DB::raw("CONCAT(course_code, ' - ', title_en) AS title"),'id')
            ->get()
            ->pluck('title','id')
            ->toArray();
    }
}

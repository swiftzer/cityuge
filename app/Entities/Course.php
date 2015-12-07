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
}

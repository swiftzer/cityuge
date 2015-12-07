<?php

namespace CityUGE\Entities;

use Illuminate\Database\Eloquent\Model;

class CourseMeta extends Model
{
    protected $table = 'course_meta';

    public function course()
    {
        return $this->belongsTo('CityUGE\Entities\Course');
    }
}

<?php

namespace CityUGE\Entities;

use CityUGE\Semester;
use Illuminate\Database\Eloquent\Model;

class AimsStats extends Model
{
    protected $table = 'course_aims_stats';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}

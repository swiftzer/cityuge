<?php

namespace CityUGE\Entities;

use Illuminate\Database\Eloquent\Model;

class AimsStats extends Model
{
    protected $table = 'course_aims_stats';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

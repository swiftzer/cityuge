<?php

namespace CityUGE\Entities;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    protected $table = 'offerings';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

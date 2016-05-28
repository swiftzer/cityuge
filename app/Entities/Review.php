<?php

namespace CityUGE\Entities;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    public function course()
    {
        return $this->belongsTo('CityUGE\Entities\Course');
    }
}


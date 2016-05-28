<?php

namespace CityUGE\Entities;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    public function courses()
    {
        return $this->hasMany('CityUGE\Entities\Course');
    }
}

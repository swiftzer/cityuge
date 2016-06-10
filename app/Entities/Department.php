<?php

namespace CityUGE\Entities;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    public function getRouteKeyName()
    {
        return 'initial';
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}

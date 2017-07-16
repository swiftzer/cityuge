<?php

namespace CityUGE\Entities;

use CityUGE\Entities\Scopes\IsEnabledScope;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    protected $table = 'semesters';
    public $timestamps = false;
    protected $dates = [
        'started_at',
        'ended_at',
        'promo_stared_at',
        'promo_ended_at',
        'grade_released_from',
    ];

    public function getRouteKeyName()
    {
        return 'semester';
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new IsEnabledScope());
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'offerings');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

<?php
namespace CityUGE\Entities;


use Illuminate\Database\Eloquent\Model;

class ReviewReport extends Model
{
    protected $table = 'review_reports';
    protected $dates = [
        'resolved_at',
    ];

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

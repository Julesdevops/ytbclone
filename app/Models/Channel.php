<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $table = 'channel';

    protected $attributes = [
        'subscribers' => 0,
        'views' => 0
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function usersWhoSubscribed()
    {
        return $this->belongsToMany('App\Models\User', 'user_subscribed_channel');
    }

    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }
}

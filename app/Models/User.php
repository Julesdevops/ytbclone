<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function channel()
    {
        return $this->hasOne('App\Models\Channel');
    }

    public function likedVideos()
    {
        return $this->belongsToMany('App\Models\Video', 'user_like_video');
    }

    public function dislikedVideos()
    {
        return $this->belongsToMany('App\Models\Video', 'user_dislike_video');
    }

    public function likedComments()
    {
        return $this->belongsToMany('App\Models\Comment', 'user_like_comment');
    }

    public function dislikedComments()
    {
        return $this->belongsToMany('App\Models\Comment', 'user_dislike_comment');
    }

    public function subscribedChannels()
    {
        return $this->belongsToMany('App\Models\Channel', 'user_subscribed_channel');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\DateService;

class Video extends Model
{
    use HasFactory;

    protected $table = 'video';

    protected $attributes = [
        'views' => 0,
        'likes' => 0,
        'dislikes' => 0,
        'comment_number' => 0
    ];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function usersWhoLiked()
    {
        return $this->belongsToMany('App\Models\User', 'user_like_video');
    }

    public function usersWhoDisliked()
    {
        return $this->belongsToMany('App\Models\User', 'user_dislike_video');
    }

    /**
     * Get the channel that owns this video
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function channel()
    {
        return $this->belongsTo('App\Models\Channel');
    }

    public function getAgoAttribute()
    {
        $dateService = resolve(DateService::class);

        return $dateService->ago($this->release_datetime);
    }

    public function getReleaseDateAttribute()
    {
        $dateService = resolve(DateService::class);

        return $dateService->humanReadable($this->release_datetime);
    }
}

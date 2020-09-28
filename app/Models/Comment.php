<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\DateService;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';

    protected $attributes = [
        'likes' => 0,
        'dislikes' => 0,
        'answers' => 0
    ];

    /**
     * Get the video that owns this comment
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function video()
    {
        return $this->belongsTo('App\Models\Video');
    }

    public function usersWhoLiked()
    {
        return $this->belongsToMany('App\Models\User', 'user_like_comment');
    }

    public function usersWhoDisliked()
    {
        return $this->belongsToMany('App\Models\User', 'user_dislike_comment');
    }

    /**
     * Get the comment answered by this comment
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo('App\Models\Comment', 'parent_id');
    }

    /**
     * Get the responses received by this comment
     * Responses are also instances of Comment
     * 
     * @return Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany('App\Models\Comment', 'parent_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getAgoAttribute()
    {
        $dateService = resolve(DateService::class);

        return $dateService->ago($this->created_at);
    }
}

<?php

namespace App\Http\Controllers\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Comment as CommentResource;
use App\Http\Resources\CommentCollection;
use App\Models\Comment;

class CommentRetrieveController extends Controller
{
    public function getVideoComments(int $videoId, int $offset)
    {
        $popularComments = Comment::where('video_id', $videoId)
                                ->latest()
                                ->skip($offset)
                                ->take(30)
                                ->get();
        
        return new CommentCollection($popularComments);
    }

    public function getComment(int $commentId)
    {
        return new CommentResource(
            Comment::findOrFail($commentId)
        );
    }
}

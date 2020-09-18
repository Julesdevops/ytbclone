<?php

namespace App\Http\Controllers\Video;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\VideoCollection;
use App\Http\Resources\Video as VideoResource;
use App\Models\Video;

class VideoRetrieveController extends Controller
{
    public function getVideoOverviews()
    {
        $popularVideos = Video::where('release_datetime', '<>', null)
                            ->orderBy('likes', 'desc')
                            ->take(15)
                            ->get();
        
        return new VideoCollection($popularVideos);
    }

    public function getVideo(int $videoId)
    {
        return new VideoResource(
            Video::findOrFail($videoId)
        );
    }
}

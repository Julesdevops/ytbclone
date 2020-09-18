<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Video extends JsonResource
{
    public static $wrap = 'video';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'views' => $this->views,
            'likes' => $this->likes,
            'dislikes' => $this->dislikes,
            'numberOfComments' => $this->comments,
            'title' => $this->title,
            'video_filepath' => $this->video_filepath,
            'thumbnail_filepath' => $this->thumbnail_filepath,
            'release_datetime' => $this->release_datetime,
            'description' => $this->description,
            'channel' => new ChannelOverview($this->channel),
        ];
    }
}

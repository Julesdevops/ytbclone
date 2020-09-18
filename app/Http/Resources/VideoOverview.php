<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoOverview extends JsonResource
{
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
            'thumbnail_filepath' => $this->thumbnail_filepath,
            'title' => $this->title,
            'released' => $this->release_datetime,
            'channel' => new ChannelOverview($this->channel)
        ];
    }
}

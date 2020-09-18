<?php

namespace App\Http\Controllers\Channel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ChannelOverview;
use App\Models\Channel;

class ChannelRetrieveController extends Controller
{
    public function getUserSubscriptions()
    {
        // TODO
        //* Retrieve the id of current user
    }

    public function getChannelOverview(int $channelId)
    {
        return new ChannelOverview(
            Channel::findOrFail($channelId)
        );
    }
}

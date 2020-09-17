<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Comment;
use App\Models\Video;
use App\Models\Channel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $channel = Channel::factory()->create([
            'user_id' => User::factory()
        ]);
        
        Video::factory()
                ->times(15)
                ->create([
                    'channel_id' => $channel
                ]);
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Video;
use App\Models\Channel;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    protected $instancesNumber = 0;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->instancesNumber = $this->instancesNumber + 1;

        $i = $this->instancesNumber;

        return [
            'views' => rand(0, 10000),
            'likes' => rand(0, 10000),
            'dislikes' => rand(0, 10000),
            'comment_number' => rand(0, 1000),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(1000),
            'release_datetime' => $this->faker->dateTimeThisDecade(),
            'video_filepath' => "/storage/videos/$i.mp4",
            'thumbnail_filepath' => "/storage/thumbnails/$i.jpg"
        ];
    }

    public function emptyDescription()
    {
        return $this->state([
            'description' => null
        ]);
    }
}

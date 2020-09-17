<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Channel;
use App\Models\User;

class ChannelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Channel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subscribers' => rand(0, 1000),
            'views' => rand(0, 10000),
            'description' => $this->faker->text(255),
            'email' => $this->faker->unique()->safeEmail,
            'name' => $this->faker->unique()->name
        ];
    }

    public function emptyDescription()
    {
        return $this->state([
            'description' => null
        ]);
    }

    public function noEmail()
    {
        return $this->state([
            'email' => null
        ]);
    }
}

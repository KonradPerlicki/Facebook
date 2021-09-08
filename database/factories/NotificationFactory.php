<?php

namespace Database\Factories;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notification::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'from_user_id' => User::all()->random()->id,
            'from_user_id' => User::all()->random()->id,
            'content' => $this->faker->randomElement([' has liked your post.',' sent you a friend request']),
        ];
    }
}

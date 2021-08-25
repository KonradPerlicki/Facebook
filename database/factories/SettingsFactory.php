<?php

namespace Database\Factories;

use App\Models\Settings;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Settings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'who_can_follow' => $this->faker->randomElement([0,1,2]),
            'show_my_activities' => $this->faker->randomElement([0,1,2]),
            'display_in_search_engine' => $this->faker->randomElement([0,1])
        ];
    }
}

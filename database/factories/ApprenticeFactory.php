<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\apprentice>
 */
class ApprenticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'code' => fake()->unique()->randomllumber(10,true),    
            'email' => fake()->unique()->email(),
            'telephone' => fake()->unique()->randomllumber(10,true),
            'course_id' => Course::inRamdomOrder()->first()->id

        ];
    }
}

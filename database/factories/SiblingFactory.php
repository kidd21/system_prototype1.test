<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siblings>
 */
class SiblingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_sibling' => $this->faker->name(),
            'age' => 15,
            'educational_attain'=> $this->faker->catchPhrase(),
            'school_attended' => 'davao national high school',
            'occupation' => $this->faker->jobTitle()
        ];
    }
}

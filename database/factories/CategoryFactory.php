<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_ar' => $this->faker->paragraph(1),
            'name_en' => $this->faker->paragraph(1),
            'name_tr' => $this->faker->paragraph(1),
            'info_ar' => $this->faker->paragraph(3),
            'info_tr' => $this->faker->paragraph(3),
            'info_en' => $this->faker->paragraph(3),
        ];
    }
}

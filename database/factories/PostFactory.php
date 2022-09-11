<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1,5),
            'title_ar' =>$this->faker->paragraph(1),
            'title_en'=>$this->faker->paragraph(1),
            'title_tr'=>$this->faker->paragraph(1),
            'info_ar' => $this->faker->paragraph(3),
            'info_en' => $this->faker->paragraph(3),
            'info_tr' => $this->faker->paragraph(3),
            'slug' => \Str::slug($this->faker->paragraph(1)),
        ];
    }
}

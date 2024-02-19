<?php

namespace Database\Factories\dashboard;

use App\Models\dashboard\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class sectionFactory extends Factory
{
    protected $model = Section::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement(['قسم المخ والاعصاب', 'قسم الجراحة', 'قسم الاطفال', 'قسم النساء والتوليد', 'قسم العيون', 'قسم الباطنة']),
            'description' => $this->faker->paragraph
        ];
    }
}

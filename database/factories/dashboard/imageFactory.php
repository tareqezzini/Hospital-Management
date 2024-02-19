<?php

namespace Database\Factories\dashboard;

use App\Models\dashboard\doctor;
use App\Models\dashboard\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class imageFactory extends Factory
{

    protected $model = Image::class;
    public function definition(): array
    {
        return [
            'filename' =>  $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg', '4.jpg']),
            'imageable_id' => doctor::all()->random()->id,
            'imageable_type' => 'App\Models\Doctor',
        ];
    }
}
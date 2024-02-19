<?php

namespace Database\Factories\dashboard;

use App\Models\dashboard\doctor;
use App\Models\dashboard\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dashboard\doctor>
 */
class doctorFactory extends Factory
{
    protected $model = doctor::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => $this->faker->phoneNumber,
            'section_id' => Section::all()->random()->id,
        ];
    }
}

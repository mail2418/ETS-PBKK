<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_id' => $this->faker->mt_rand(1, 7),
            'patient_id' => $this->faker->mt_rand(1, 3),
            'kondisi_kesehatan' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(1, 2)),
            'body' => $this->faker->paragraph(mt_rand(20, 30)),
            'user_id' => mt_rand(1, 7),
            'category_id' => mt_rand(1, 3)
        ];
    }
}

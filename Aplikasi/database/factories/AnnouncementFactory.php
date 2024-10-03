<?php

namespace Database\Factories;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2,8)),
            'deskripsi' => $this->faker->sentence(mt_rand(5,10))
        ];
    }
}

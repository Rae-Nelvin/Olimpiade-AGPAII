<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ParticipantDetail;

class ParticipantDetailFactory extends Factory
{
    protected $model = ParticipantDetail::class;

    public function definition()
    {
        return [
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            'nisn' => $this->faker->unique()->numerify('##########'), // Generate a unique NISN
            'asal_sekolah' => $this->faker->company,
            'foto_kartu_pelajar' => $this->faker->imageUrl(), // You can customize this to generate image URLs
            'foto_bukti_pembayaran' => $this->faker->imageUrl(), // You can customize this to generate image URLs
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Default password for testing
            'phone_number' => '0812312332',
            'province_id' => $this->faker->numberBetween(1, 38),
            'remember_token' => Str::random(10),
        ];
    }
}

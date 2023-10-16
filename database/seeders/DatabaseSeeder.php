<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ParticipantDetail;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // Create participant users and their details
        $participantCount = 50; // Adjust the number of participants you want to create

        User::factory($participantCount)->create(); // Create participant users

        // Create participant details for each participant user
        User::get()->each(function ($user) {
            ParticipantDetail::factory()->create(['user_id' => $user->id]);
        });

        $this->call([
            AdminSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\ParticipantDetail;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Leonardo Wijaya',
            'email' => 'leonardo.wijaya003@gmail.com',
            'password' => bcrypt('Leonardo123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'adminagpaii',
            'email' => 'adminagpaii@admin.com',
            'password' => bcrypt('4dm1n49p411'),
            'role' => 'admin',
        ]);
    }
}

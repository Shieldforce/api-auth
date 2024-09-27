<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name'  => "User Grant Type Authorization Code",
            'email' => 'user1@system.com',
        ]);

        User::factory()->create([
            'name'  => "User Grant Type Password",
            'email' => 'user2@system.com',
        ]);

        User::factory()->create([
            'name'  => "User Grant Type Client Credentials",
            'email' => 'user3@system.com',
        ]);
    }
}

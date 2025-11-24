<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "Vesper Admin",
            'email' => "vespershop.25@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make("Vesper@@##Admin"),
            'is_admin' => 1
        ]);
    }
}

<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => Str::uuid(),
            'name' => 'Manasseh Maina',
            'email' => 'mainamanasseh02@gmail.com',
            'password' => Hash::make('password'),
            'profile_picture' => null,
            'bio' => 'This is a sample bio for John Doe.',
            'two_factor_enabled' => false,
            'two_factor_secret' => null,
            'status' => 'active',
            'date_of_birth' => '1990-01-01',
            'last_login_at' => now(),
            'email_verified' => true,
            'verification_code' => null,
        ]);
    }
}

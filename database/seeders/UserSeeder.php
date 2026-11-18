<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Akun Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // 2. Akun Dosen
        User::create([
            'name' => 'Dosen',
            'email' => 'dosen@test.com',
            'password' => Hash::make('password'),
            'role' => 'dosen',
        ]);

        // 3. Akun Mahasiswa
        User::create([
            'name' => 'Mahasiswa',
            'email' => 'mhs@test.com',
            'password' => Hash::make('password'),
            'role' => 'mahasiswa',
        ]);
    }
}
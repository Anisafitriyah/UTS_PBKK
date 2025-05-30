<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => Str::ulid(),
            'name' => 'admin',
            'email' => 'admin@ifump.net',
            'password' => Hash::make('password'),
            'membership_date' => '2001-10-12'
        ]);
        User::create([
            'id' => Str::ulid(),
            'name' => 'anisa',
            'email' => 'anisa50@gmail.com',
            'password' => Hash::make('multiTech'),
            'membership_date' => '2001-10-12'
        ]);
    }
}
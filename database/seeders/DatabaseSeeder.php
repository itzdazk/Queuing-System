<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'full_name' => 'Người dùng mẫu',
            'phone_number' => '0942323132',
            'email' => 'nguoidungmau@example.com',
            'username' => 'dazk',
            'active' => '1',
            'password' => Hash::make('123'),
        ]);

        $role = Role::created([
            'name' => 'admin',
        ]);
    }
}

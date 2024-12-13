<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone_number' => '+628111111111',
            'password' => Hash::make('Password'),
            'age' => '99',
            'gender' => 'L',
            'religion' => 'Islam',
            'address' => 'Sesame Street',
            'position' => 'Admin',
        ])->assignRole('admin');

        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'phone_number' => '+6281234567890',
            'password' => Hash::make('Password'),
            'age' => '22',
            'gender' => 'L',
            'religion' => 'Islam',
            'address' => 'Samarinda',
            'position' => 'Karyawan',
        ])->assignRole('employee');
    }
}

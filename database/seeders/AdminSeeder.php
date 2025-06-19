<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        'name' => 'Super Admin',
        'email' => 'shiro@gmail.com',
        'password' => Hash::make('shiro123'),
        'role' => 'admin'
    ]);
    }
}

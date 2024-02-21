<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Contoh menggunakan Query Builder
        User::create([
            'name' => 'humaedi',
            'email' => 'humaedi@gmail.com',
            'password' => bcrypt('humaedi12345'),
        ]);

        // Atau contoh menggunakan model Eloquent
        User::create([
            'name' => 'muhamad',
            'email' => 'muhamad@gmail.com',
            'password' => bcrypt('muhamad12345'),
        ]);
    }
}

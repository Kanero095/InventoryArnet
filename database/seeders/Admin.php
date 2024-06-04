<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            ['name'=>'Admin',
            'email'=>'admin@masteradmin.com',
            'password'=>bcrypt('Admin123')],

            ['name'=>'nabila',
            'email'=>'nabila@admin.com',
            'password'=>bcrypt('12345678')],

            ['name'=>'esa',
            'email'=>'esa@admin.com',
            'password'=>bcrypt('12345678')]
        ];

        foreach($userData as $key => $value)
        {
            User::create($value);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  [
            [
                'username' => 'admin',
                'name' => 'Ini adalah admin',
                'email' => 'admin@example.com',
                'level' => 'admin',
                'password' => bcrypt('admin123')
            ],
            [
                'username' => 'user',
                'name' => 'Ini adalah user',
                'email' => 'user@example.com',
                'level' => 'user',
                'password' => bcrypt('user123') 
            ]
            ];
            foreach ($user as $key => $value) {
                User::create($value);
             }
    }
}

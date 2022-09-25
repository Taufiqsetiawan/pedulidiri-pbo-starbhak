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
                'username' => '001',
                'name' => 'Taufiq Setiawan',
                'email' => 'wawan@example.com',
                'level' => 'admin',
                'password' => bcrypt('wawan')
            ],
            [
                'username' => '002',
                'name' => 'Muhammad Rizki',
                'email' => 'rizki@example.com',
                'level' => 'user',
                'password' => bcrypt('rizki') 
            ]
            ];
            foreach ($user as $key => $value) {
                User::create($value);
             }
    }
}

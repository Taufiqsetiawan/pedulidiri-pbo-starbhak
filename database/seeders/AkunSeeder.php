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
                'name' => 'Ini adalah wawan',
                'email' => 'wawan@example.com',
                'level' => 'admin',
                'password' => bcrypt('wawan')
            ],
            [
                'username' => '002',
                'name' => 'Ini adalah udin',
                'email' => 'udin@example.com',
                'level' => 'user',
                'password' => bcrypt('udin') 
            ]
            ];
            foreach ($user as $key => $value) {
                User::create($value);
             }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Yo Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
                'type' => 1,
            ]
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}

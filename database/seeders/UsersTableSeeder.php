<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'hema',
            'last_name' => 'anany',
            'phone' => '01009313883',
            'email' => 'hema.3nany@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}

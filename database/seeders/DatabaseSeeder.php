<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            [
                'id'   => 1,
            ],
            [
            'name' =>'admin',
            'password' =>Hash::make('123456'),
            'email' =>'amdin@gmail.com',
            'mobile' =>'01234567',
            'address' => 'address',
            'image' => 'profile image data',
            'is_admin' => '1'
        ]);
        // \App\Models\User::factory(10)->create();
    }
}

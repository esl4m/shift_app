<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(2)->create();
        User::create(array('name' => 'Admin', 'email' => 'admin@admin.com', 'email_verified_at' => now(), 'password'=> Hash::make('admin_pass'), 'remember_token' => Str::random(10)));
        User::create(array('name' => 'Api', 'email' => 'api@admin.com', 'email_verified_at' => now(), 'password' => Hash::make('api_pass'), 'remember_token' => Str::random(10)));
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'superadmin@elsys.org',
            'password' => Hash::make('password'),
        ]);

//        User::factory()->create([
//            'first_name' => 'Super',
//            'last_name' => 'Admin',
//            'email' => 'superadmin@elsys.org',
////            'password' => Hash::make('password'),
//        ])->dd();
    }
}
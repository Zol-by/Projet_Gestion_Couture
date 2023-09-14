<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
   /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'DENENE',
            'email' => 'della@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'ZOLO',
            'email' => 'eloge@gmail.com',
            'password' => Hash::make('12365478'),
        ]);

        DB::table('users')->insert([
            'name' => 'KAMO',
            'email' => 'eli@gmail.com',
            'password' => Hash::make('1233'),
        ]);
    }
}

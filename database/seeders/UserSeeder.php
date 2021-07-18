<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Yedil',
                'email' => 'Yedil@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'id' => 2,
                'name' => 'Mansur',
                'email' => 'Mansur@gmail.com',
                'password' => Hash::make('12345678'),

            ],
        ]);
    }


}

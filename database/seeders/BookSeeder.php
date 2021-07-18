<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'id' => 1,
                'book_name' => 'Iphone 11',
                'price' => '250000',
                'book_image' => 'http://commondatastorage.googleapis.com/codeskulptor-demos/riceracer_assets/img/car_1.png',
                'book_description' => 'Идеальное состояние',
                'created_at'=> '2021-07-16 12:20:22'
            ],

            [
                'id' => 2,
                'book_name' => 'Macbook Air',
                'price' => '450000',
                'book_image' => 'http://codeskulptor-demos.commondatastorage.googleapis.com/GalaxyInvaders/back02.jpg',
                'book_description' => 'Новый',
                'created_at'=> '2020-07-16 12:20:22'
            ],

        ]);

    }
}

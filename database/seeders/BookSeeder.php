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
                'created_at'=> '2021-07-10 12:20:22'
            ],

            [
                'id' => 3,
                'book_name' => 'Chair',
                'price' => '5000',
                'book_image' => 'http://codeskulptor-demos.commondatastorage.googleapis.com/GalaxyInvaders/back02.jpg',
                'book_description' => 'Новый',
                'created_at'=> '2021-07-12 14:20:22'
            ],
            [
                'id' => 4,
                'book_name' => 'laptop',
                'price' => '200000',
                'book_image' => 'http://codeskulptor-demos.commondatastorage.googleapis.com/GalaxyInvaders/back02.jpg',
                'book_description' => 'БУ',
                'created_at'=> '2021-07-10 10:20:22'
            ],
            [
                'id' => 5,
                'book_name' => 'Airpods 2',
                'price' => '49999',
                'book_image' => 'http://codeskulptor-demos.commondatastorage.googleapis.com/GalaxyInvaders/back02.jpg',
                'book_description' => 'Идеальное состояние',
                'created_at'=> '2021-06-10 12:20:22'
            ],
            [
                'id' => 6,
                'book_name' => 'Camry 75',
                'price' => '1050000',
                'book_image' => 'http://commondatastorage.googleapis.com/codeskulptor-demos/riceracer_assets/img/car_1.png',
                'book_description' => 'Новый',
                'created_at'=> '2021-07-02 12:20:22'
            ],
        ]);

    }
}

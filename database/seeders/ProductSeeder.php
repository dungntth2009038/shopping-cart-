<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'meo',
                'price' => 100000,
                'thumbnail' => 'https://i.ytimg.com/vi/SY-QZ_HEY-I/hqdefault.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'cho',
                'price' => 100032,
                'thumbnail' => 'https://i.ytimg.com/vi/fyxJpHfUYfM/hqdefault.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'name' => 'cho',
                'price' => 100032,
                'thumbnail' => 'https://i.ytimg.com/vi/fyxJpHfUYfM/hqdefault.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'name' => 'cho',
                'price' => 100032,
                'thumbnail' => 'https://i.ytimg.com/vi/fyxJpHfUYfM/hqdefault.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'name' => 'cho',
                'price' => 100032,
                'thumbnail' => 'https://i.ytimg.com/vi/fyxJpHfUYfM/hqdefault.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'name' => 'cho',
                'price' => 100032,
                'thumbnail' => 'https://i.ytimg.com/vi/fyxJpHfUYfM/hqdefault.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'name' => 'cho',
                'price' => 100032,
                'thumbnail' => 'https://i.ytimg.com/vi/fyxJpHfUYfM/hqdefault.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'name' => 'cho',
                'price' => 100032,
                'thumbnail' => 'https://i.ytimg.com/vi/fyxJpHfUYfM/hqdefault.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'name' => 'cho',
                'price' => 100032,
                'thumbnail' => 'https://i.ytimg.com/vi/fyxJpHfUYfM/hqdefault.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 10,
                'name' => 'cho',
                'price' => 100032,
                'thumbnail' => 'https://i.ytimg.com/vi/fyxJpHfUYfM/hqdefault.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

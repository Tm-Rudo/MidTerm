<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    //tương tự insert ở db
    public function run(): void
    {
        //composer require fakerphp/faker
        $faker = Faker::create();
        
        for ($i=0;$i<100;$i++)
        {
            DB::table('songs')->insert([
                
                'title'=>$faker->title(),
                'artist'=>$faker->title(),
                'album'=>$faker->title(),
                'length'=>$faker->randomFloat(),

            ]);
        }
    //     $song = 
    //     ['title' => 'test 1', 'artist' => 'abc', 'album' => 'one', "length" =>'20'];
    //     ['title' => 'test 2', 'artist' => 'abcd', 'album' => 'one', "length" =>'20'];
    //     ['title' => 'test 3', 'artist' => 'abcde', 'album' => 'one', "length" =>'20'];

    // DB::table('songs')->insert($song);

    }
}
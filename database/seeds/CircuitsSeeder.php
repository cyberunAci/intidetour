<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CircuitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                "id" => 1,
                "nom" => "test 1",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/9/9a/Gull_portrait_ca_usa.jpg",
                "difficulte" => "facile",
                "description" => "Description du circuit",
                "duree" => "2h30",
                "distance" => "2km",
                "latitude" => "1.545454",
                "longitude" => "1.545454",
               "deleted_at" => null,

            ],
            [
                "id" => 2,
                "nom" => "test 2",
                "image" => "https://media.gettyimages.com/photos/cropped-image-of-person-eye-picture-id942369796?s=612x612",
                "difficulte" => "moyen",
                "description" => "Description du circuit",
                "duree" => "2h30",
                "distance" => "2km",
                "latitude" => "1.545454",
                "longitude" => "1.545454",
               "deleted_at" => null,
            ]
        ];
    
        DB::table('circuits')->insert(
            $array
        );
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosCircuitSeeder extends Seeder
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
                "photos" => "https://upload.wikimedia.org/wikipedia/commons/9/9a/Gull_portrait_ca_usa.jpg",
                "id_circuit" => 1

            ],
            [
                "id" => 2,
                "photos" => "https://upload.wikimedia.org/wikipedia/commons/9/9a/Gull_portrait_ca_usa.jpg",
                "id_circuit" => 2

            ]
        ];
        DB::table('photos_circuit')->insert(
            $array
        );
    }
}

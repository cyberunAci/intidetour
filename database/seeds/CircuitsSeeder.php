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
                "image" => "lien img",
                "difficulte" => "facile",
                "description" => "Description du circuit"
            ],
            [
                "id" => 2,
                "nom" => "test 2",
                "image" => "lien img",
                "difficulte" => "moyen",
                "description" => "Description du circuit"
            ]
        ];
    
        DB::table('circuits')->insert(
            $array
        );
    }
}

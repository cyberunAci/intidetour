<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterestPointsSeeder extends Seeder
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
                "nom" => "point d'interet 1",
                "coordonnees" => "48.89, 2.21",
                "id_type" => 1
            ],
            [
                "nom" => "point d'interet 2",
                "coordonnees" => "48.50, 2.84",
                "id_type" => 2
            ]
        ];

        DB::table('interest_points')->insert(
            $array
        );
    }
}

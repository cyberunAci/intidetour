<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalerieSeeder extends Seeder
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
                "order" => "1",
                "id_photo" => "1",

            ],
            [
                "id" => 2,
                "order" => "2",
                "id_photo" => "2",

            ],
        ];

        DB::table('galerie_photos')->insert(
            $array
        );
    }
}

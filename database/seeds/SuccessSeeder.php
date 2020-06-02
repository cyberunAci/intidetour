<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuccessSeeder extends Seeder
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
                "nom" => "Succes 1",
                "image" => "/storage/imgs/cookie.jpg",
                "description" => "description du succes"
            ],
            [
                "id" => 2,
                "nom" => "Succes 2",
                "image" => "/storage/imgs/cookie.jpg",
                "description" => "description du succes"
            ]
        ];
        DB::table('success')->insert(
            $array
        );
    }
}

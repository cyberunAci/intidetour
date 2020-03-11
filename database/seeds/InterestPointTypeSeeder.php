<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterestPointTypeSeeder extends Seeder
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
                "type" => "eglise"
            ],
            [   
                "id" => 2,
                "type" => "snack"
            ]
        ];

        DB::table('interest_point_types')->insert(
            $array
        );
    }
}

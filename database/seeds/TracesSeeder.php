<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TracesSeeder extends Seeder
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
                "trace" => "trace 1",
                "id_circuit" => 1
            ],
            [
                "trace" => "trace 2",
                "id_circuit" => 2
            ]
        ];
        DB::table('traces')->insert(
            $array
        );
    }
}

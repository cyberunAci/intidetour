<?php

use Illuminate\Database\Seeder;

class UserCircuitSeeder extends Seeder
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
                "id_circuit" => 2,
                "id_user" => 1
            ],
            [
                "id_circuit" => 1,
                "id_user" => 2
            ]
        ];
        DB::table('user_has_circuit')->insert(
            $array
        );
    }
}

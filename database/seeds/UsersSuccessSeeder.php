<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSuccessSeeder extends Seeder
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
                "id_success" => 1,
                "id_user" => 1
            ],
            [
                "id_success" => 2,
                "id_user" => 2
            ]
        ];
        DB::table('users_success')->insert(
            $array
        );
    }
}

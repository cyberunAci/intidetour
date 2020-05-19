<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
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
                "nom" => "TanPerm",
                "prenom" => "Gui",
                "email" => "admin@gmail.com",
                "date_naissance" => "1995-02-09",
                "tel" => "0692121212",
                "password" => bcrypt("admin"),
                "photo" => "lien photo",
                "id_role" => 1
            ],
            [
                "nom" => "Snickers",
                "prenom" => "Johnny",
                "email" => "user@gmail.com",
                "date_naissance" => "1995-12-10",
                "tel" => "0692131313",
                "password" => bcrypt("user"),
                "photo" => "lien photo",
                "id_role" => 2
            ]
        ];

        DB::table('users')->insert(
            $array
        );
    }
}

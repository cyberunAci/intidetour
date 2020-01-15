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
                "email" => "guiperm@gmail.com",
                "date_naissance" => "1995-02-09",
                "tel" => "0692121212",
                "password" => "123",
                "photo" => "lien photo"
            ],
            [
                "nom" => "Snickers",
                "prenom" => "Johnny",
                "email" => "josni@gmail.com",
                "date_naissance" => "1995-12-10",
                "tel" => "0692131313",
                "password" => "456",
                "photo" => "lien photo"
            ]
        ];

        DB::table('users')->insert(
            $array
        );
    }
}

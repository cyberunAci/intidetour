<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            RolesSeeder::class,
            CircuitsSeeder::class,
            ClientsSeeder::class,
            InterestPointTypeSeeder::class,
            InterestPointsSeeder::class,
            SuccessSeeder::class,
            EvenementsSeeder::class,
            TracesSeeder::class,
            UsersSuccessSeeder::class,
            PhotosCircuitSeeder::class,
            AproposSeeder::class,
            GalerieSeeder::class,
            UserCircuitSeeder::class,
           
            ]);
    }
}

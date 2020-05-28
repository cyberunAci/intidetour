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
            CircuitsSeeder::class,
            RolesSeeder::class,
            ClientsSeeder::class,
            InterestPointTypeSeeder::class,
            InterestPointsSeeder::class,
            SuccessSeeder::class,
            TracesSeeder::class,
            UsersSuccessSeeder::class,
            PhotosCircuitSeeder::class,
            AproposSeeder::class,
            GalerieSeeder::class,
            ]);
    }
}

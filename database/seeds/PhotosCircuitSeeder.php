<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotosCircuitSeeder extends Seeder
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
                "photo" => "https://www.reunion-mafate.com/fileadmin/_processed_/5/4/csm_34-deux-fesses-mafate-sentier-scout-mafate-_20158ff746.jpg",
                "id_circuit" => 1

            ],
            [
                "id" => 2,
                "photo" => "https://www.les-covoyageurs.com/ressources/images-lieux/photo-lieu-764-1.jpg",
                "id_circuit" => 2

            ],
            [
                "id" => 3,
                "photo" => "https://freedom.fr/wp-content/uploads/2018/04/RDTponttroisbassinsroutedestamarins-creditirt-emmanuelvirin.jpg",
                "id_circuit" => 1

            ],
            [
                "id" => 4,
                "photo" => "https://www.clicanoo.re/sites/default/files/styles/juicebox_ar/public/image_articles//2016-10/Trois_Bassins.jpg?itok=xjU19mhV",
                "id_circuit" => 2

            ],
            [
                "id" => 5,
                "photo" => "https://star-aid.fr/wp-content/uploads/2017/03/COMMUNE-DE-3-BASSINS.jpg",
                "id_circuit" => 1

            ],
            [
                "id" => 6,
                "photos" => "https://mapio.net/images-p/8638939.jpg",
                "id_circuit" => 2

            ],
            [
                "id" => 7,
                "photo" => "https://www.ouest-lareunion.com/galerie-wysipage/71/original-71-img20150929-379777816.jpg",
                "id_circuit" => 1

            ],
            [
                "id" => 8,
                "photo" => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcREnxhSfgOJ7O3p2rtdE8hmpvq_ie4SBoM6nkvlj4DrLu846Gsy",
                "id_circuit" => 2

            ],


        ];
        DB::table('photos_circuit')->insert(
            $array
        );
    }
}

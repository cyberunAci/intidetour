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
                "photo" => "https://www.cartedelareunion.fr/wp-content/uploads/2016/04/Cirque-Cilaos-Reunion-1199x800.jpg",
                "id_circuit" => 1

            ],
            [
                "id" => 4,
                "photo" => "https://www.cartedelareunion.fr/wp-content/uploads/2016/05/Village-de-Cilaos-vue-aerienne-centre-cartedelareunion.fr-%C2%A9-Serge-Gelabert-1422x800.jpg",
                "id_circuit" => 2

            ],
            [
                "id" => 5,
                "photo" => "https://www.allonslareunion.com/reunion/homescreen.jpg",
                "id_circuit" => 1

            ],
            [
                "id" => 6,
                "photos" => "https://media.oovatu.com/pano-2049/reunion_81949.jpg",
                "id_circuit" => 2

            ],
            [
                "id" => 7,
                "photo" => "https://www.allibert-trekking.com/iconographie/7b/PA1_2019-la-reunion-thiphaine-briatte.jpg",
                "id_circuit" => 1

            ]
        ];
        DB::table('photos_circuit')->insert(
            $array
        );
    }
}

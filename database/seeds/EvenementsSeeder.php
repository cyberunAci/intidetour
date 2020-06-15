<?php

use Illuminate\Database\Seeder;

class EvenementsSeeder extends Seeder
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
                "evenement" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolor distinctio quos magnam ducimus dolorem alias cupiditate nisi officiis.",
                "type_media" => 'image',
            ],
            [
                "evenement" => "Lorem Ullam dolor distinctio quos magnam ducimus dolorem alias cupiditate nisi officiis doloremque placeat repellat blanditiis, voluptate, aspernatur sequi molestiae quas, esse excepturi.",
                "type_media" => 'video',
            ]
        ];
        DB::table('evenements')->insert(
            $array
        );
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CircuitsSeeder extends Seeder
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
                "nom" => "test 1",
                "image" => "/storage/imgs/cookie.jpg",
                "difficulte" => "facile",
                "description" => "Lorem ipsum dolor sit amet consectetur adipiscing elit Quisque bibendum at est efficitur pharetra Aliquam rutrum tellus volutpat imperdiet ipsum eget vehicula nisl In semper tortor ut leo vulputate eget vestibulum nisl rutrum Phasellus volutpat auctor erat Aenean tellus augue rutrum ac dignissim vitae cursus in erat Cras et lorem felis Curabitur volutpat nibh a ante dignissim dapibus a a enim In hendrerit arcu arcu id convallis ex aliquet tempor Suspendisse potenti Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus Quisque at faucibus eros Nulla ac consequat tortor Donec vehicula congue tellus non eleifend. Aliquam non elementum nisi Ut mattis gravida justo Nam ac ligula in dolor bibendum viverra elementum quis mi Nulla viverra sem dignissim convallis risus a placerat est Maecenas eu quam felis Ut in sollicitudin nulla Suspendisse volutpat commodo lorem Sed condimentum rutrum fermentum Pellentesque dui sapien varius ut elementum vitae vehicula eget ex Sed pulvinar eros nec nulla cursus varius Donec massa diam pharetra sit amet risus sit amet condimentum porta velit Quisque ac aliquam est quis tempor lorem Curabitur ut neque a mauris mollis convallis Praesent malesuada libero in justo bibendum congue Lorem ipsum dolor sit amet consectetur adipiscing elit Quisque bibendum at est efficitur pharetra Aliquam rutrum tellus volutpat imperdiet ipsum eget vehicula nisl In semper tortor ut leo vulputate eget vestibulum nisl rutrum Phasellus volutpat auctor erat Aenean tellus augue rutrum ac dignissim vitae cursus in erat Cras et lorem felis Curabitur volutpat nibh a ante dignissim dapibus a a enim In hendrerit arcu arcu id convallis ex aliquet tempor Suspendisse potenti Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus Quisque at faucibus eros Nulla ac consequat tortor Donec vehicula congue tellus non eleifend. Aliquam non elementum nisi Ut mattis gravida justo Nam ac ligula in dolor bibendum viverra elementum quis mi Nulla viverra sem dignissim convallis risus a placerat est Maecenas eu quam felis Ut in sollicitudin nulla Suspendisse volutpat commodo lorem Sed condimentum rutrum fermentum Pellentesque dui sapien varius ut elementum vitae vehicula eget ex Sed pulvinar eros nec nulla cursus varius Donec massa diam pharetra sit amet risus sit amet condimentum porta velit Quisque ac aliquam est quis tempor lorem Curabitur ut neque a mauris mollis convallis Praesent malesuada libero in justo bibendum congue",
                "duree" => "2h30",
                "distance" => "2km",
                "latitude" => "-21,0499",
                "longitude" => "55,4272",

            ],
            [
                "id" => 2,
                "nom" => "test 2",
                "image" => "/storage/imgs/cookie.jpg",
                "difficulte" => "moyen",
                "description" => "Lorem ipsum dolor sit amet consectetur adipiscing elit Quisque bibendum at est efficitur pharetra Aliquam rutrum tellus volutpat imperdiet ipsum eget vehicula nisl In semper tortor ut leo vulputate eget vestibulum nisl rutrum Phasellus volutpat auctor erat Aenean tellus augue rutrum ac dignissim vitae cursus in erat Cras et lorem felis Curabitur volutpat nibh a ante dignissim dapibus a a enim In hendrerit arcu arcu id convallis ex aliquet tempor Suspendisse potenti Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus Quisque at faucibus eros Nulla ac consequat tortor Donec vehicula congue tellus non eleifend. Aliquam non elementum nisi Ut mattis gravida justo Nam ac ligula in dolor bibendum viverra elementum quis mi Nulla viverra sem dignissim convallis risus a placerat est Maecenas eu quam felis Ut in sollicitudin nulla Suspendisse volutpat commodo lorem Sed condimentum rutrum fermentum Pellentesque dui sapien varius ut elementum vitae vehicula eget ex Sed pulvinar eros nec nulla cursus varius Donec massa diam pharetra sit amet risus sit amet condimentum porta velit Quisque ac aliquam est quis tempor lorem Curabitur ut neque a mauris mollis convallis Praesent malesuada libero in justo bibendum congue Lorem ipsum dolor sit amet consectetur adipiscing elit Quisque bibendum at est efficitur pharetra Aliquam rutrum tellus volutpat imperdiet ipsum eget vehicula nisl In semper tortor ut leo vulputate eget vestibulum nisl rutrum Phasellus volutpat auctor erat Aenean tellus augue rutrum ac dignissim vitae cursus in erat Cras et lorem felis Curabitur volutpat nibh a ante dignissim dapibus a a enim In hendrerit arcu arcu id convallis ex aliquet tempor Suspendisse potenti Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus Quisque at faucibus eros Nulla ac consequat tortor Donec vehicula congue tellus non eleifend. Aliquam non elementum nisi Ut mattis gravida justo Nam ac ligula in dolor bibendum viverra elementum quis mi Nulla viverra sem dignissim convallis risus a placerat est Maecenas eu quam felis Ut in sollicitudin nulla Suspendisse volutpat commodo lorem Sed condimentum rutrum fermentum Pellentesque dui sapien varius ut elementum vitae vehicula eget ex Sed pulvinar eros nec nulla cursus varius Donec massa diam pharetra sit amet risus sit amet condimentum porta velit Quisque ac aliquam est quis tempor lorem Curabitur ut neque a mauris mollis convallis Praesent malesuada libero in justo bibendum congue",
                "duree" => "2h30",
                "distance" => "2km",
                "latitude" => "1.545454",
                "longitude" => "1.545454",
            ],
        ];

        DB::table('circuits')->insert(
            $array
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                "name"=>"Projet 1",
                "date"=>"Octobre 2020",
                "img"=>"cake.png",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nesciunt quasi aspernatur incidunt vero, delectus quam autem, inventore accusantium molestiae nemo harum tempore placeat nobis?"
            ],
            [
                "name"=>"Projet 2",
                "date"=>"Mars 2021",
                "img"=>"circus.png",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nesciunt quasi aspernatur incidunt vero, delectus quam autem, inventore accusantium molestiae nemo harum tempore placeat nobis?"
            ],
            [
                "name"=>"Projet 3",
                "date"=>"Juin 2021",
                "img"=>"safe.png",
                "desc"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nesciunt quasi aspernatur incidunt vero, delectus quam autem, inventore accusantium molestiae nemo harum tempore placeat nobis?"
            ],
        ]);
    }
}

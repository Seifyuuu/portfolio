<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                "name"=>"React",
                "level"=>5,
                "icon"=>"react"
            ],[
                "name"=>"Laravel",
                "level"=>5,
                "icon"=>"laravel"

            ],[
                "name"=>"Angular",
                "level"=>4,
                "icon"=>"angular"

            ],[
                "name"=>"JavaScript",
                "level"=>4,
                "icon"=>"js"

            ],
            [
                "name"=>"Java",
                "level"=>3,
                "icon"=>"java"

            ],
            [
                "name"=>"Python",
                "level"=>2,
                "icon"=>"python"

            ],
            [
                "name"=>"Android",
                "level"=>1,
                "icon"=>"android"

            ],
        ]);
    }
}

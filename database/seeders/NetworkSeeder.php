<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('networks')->insert([
            [
                "name"=>"Facebook",
                "url"=>"/",
                "icon"=>"facebook"
            ],
            [
                "name"=>"Twitter",
                "url"=>"/",
                "icon"=>"twitter"
            ],
            [
                "name"=>"Github",
                "url"=>"/",
                "icon"=>"github"
            ],
            [
                "name"=>"Instagram",
                "url"=>"/",
                "icon"=>"instagram"
            ],
            [
                "name"=>"Youtube",
                "url"=>"/",
                "icon"=>"youtube"
            ],
            [
                "name"=>"Linkedin",
                "url"=>"/",
                "icon"=>"linkedin"
            ],
        ]);
    }
}

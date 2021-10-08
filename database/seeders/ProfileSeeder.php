<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            "name"=>"Seif Le Testeur",
            "job"=>"Web Developer",
            "location"=>"Bruxelles - Belgium",
            "desc"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. A explicabo, voluptatum neque veniam quibusdam debitis!",
            "photo"=>"submarine.png"
        ]);
    }
}


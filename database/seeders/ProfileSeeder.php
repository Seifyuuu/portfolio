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
            "desc"=>"Totally optional short description about yourself, what you do and so on.",
            "photo"=>"https://source.unsplash.com/MP0IUfwrn0A"
        ]);
    }
}

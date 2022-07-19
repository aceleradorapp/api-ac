<?php

namespace Database\Seeders;

use App\Models\Access_security;
use Illuminate\Database\Seeder;

class AccessSecurytSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Access_security::create(["name" =>'visitor', "level" => "1"]);
        Access_security::create(["name" =>'freelancer', "level" => "2"]);
        Access_security::create(["name" =>'Company', "level" => "3"]);
        Access_security::create(["name" =>'Owner', "level" => "10"]);
    }
}

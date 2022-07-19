<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(["name" =>'editor']);
        Type::create(["name" =>'locutor']);
        Type::create(["name" =>'podcast']);
        Type::create(["name" =>'animador']);
        Type::create(["name" =>'videoCast']);
        Type::create(["name" =>'simulador']);
        Type::create(["name" =>'conteudista']);
        Type::create(["name" =>'vídeo suporte']);
    }
}

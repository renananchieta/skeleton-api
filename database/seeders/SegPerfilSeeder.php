<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SegPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itens = [
            [
                "id" => 1,
                "perfil" => "Administrador",
            ],
            [
                "id" => 2,
                "perfil" => "Diretor",
            ],
            [
                "id" => 3,
                "perfil" => "Secretário",
            ],
            [
                "id" => 4,
                "perfil" => "Assistente",
            ],
        ];
        DB::table('seg_perfil')->insert($itens);
        DB::statement("ALTER TABLE seg_perfil AUTO_INCREMENT = 5;");
    }
}

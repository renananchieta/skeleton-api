<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SegPerfilUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $itens = [
            [
                "id" => 1,
                "perfil_id" => 1,
                "usuario_id" => 1
            ],
        ];
        DB::table('seg_perfil_usuario')->insert($itens);
        DB::statement("ALTER TABLE seg_perfil_usuario AUTO_INCREMENT = 4;");
    }
}

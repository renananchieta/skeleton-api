<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('pt_BR');
        $itens = [
            [
                "id" => 1,
                "nome" => "Admin",
                "cpf" => "12345678910",
                "email" => "admin.user@seduc.pa.gov.br",
                "senha" => Hash::make(12345678),
                "contato_wpp" => "91993039530",
                "dt_nascimento" => "2000-01-01",
                "ativo" => true,
                "created_at" => Carbon::now(),
            ],
        ];
        DB::table('seg_usuarios')->insert($itens);
        DB::statement("ALTER TABLE seg_usuarios AUTO_INCREMENT = 2;");
    }
}

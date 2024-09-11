<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() { // exemplo que insere um adm no banco
        $dados=['nome'=>"Thiago",'email'=>"admin@email",'senha'=>bcrypt("123")];
        Usuario::create($dados);
    }
}

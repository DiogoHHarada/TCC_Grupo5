<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{


    protected $fillable = ['nome', 'email', 'senha', 'verificacao_codigo', 'email_rec'];
    protected $hidden = ['senha']; // Esconde a senha nas respostas JSON, se necessário

    // Especificando o nome da tabela se necessário
    protected $table = 'usuarios'; // Se a tabela no banco de dados tiver um nome diferente

    public function getAuthPassword()
    {
        return $this->senha;
    }
}

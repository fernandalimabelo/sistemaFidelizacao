<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Produto extends Model
{
    protected $fillable = ['nome_produto', 'pontos_produto', 'preco_produto', 'empresa_id'];

    protected $guarded = ['id_produto', 'created_at', 'updated_at'];

    protected $table = 'produtos';
}

class Empresa extends Eloquent{
    public function produto(){
      return $this->HasMany('Produtos');
    } 
  }

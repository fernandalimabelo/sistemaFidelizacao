<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome_produto', 'pontos_produto', 'preco_produto', 'id_empresa_fk'];

    protected $guarded = ['id_produto', 'created_at', 'updated_at'];

    protected $table = 'produtos';

    public function empresa(){
        return $this->belongsTo(Empresa::class);
    }
}   

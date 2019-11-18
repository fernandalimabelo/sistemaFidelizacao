<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutos extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_empresa_fk');
            $table->bigIncrements('id_produto');
            $table->foreign('id_empresa_fk')->references('id')->on('empresas');
            $table->string('nome_produto');
            $table->string('pontos_produto');
            $table->decimal('preco_produto', 5, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
    

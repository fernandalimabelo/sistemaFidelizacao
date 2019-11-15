<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_estabelecimento_fk');
            $table->bigIncrements('id_produto');
            $table->foreign('id_estabelecimento_fk')->references('id_estabelecimento')->on('estabelecimentos');
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

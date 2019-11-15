<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupons', function (Blueprint $table) {
            $table->bigIncrements('id_cupom');
            $table->timestamps();
            $table->unsignedBigInteger('id_produto_fk');
            $table->unsignedBigInteger('id_cliente_fk');
            $table->unsignedBigInteger('id_estabelecimento_fk');
            $table->Integer('pontos_cupom');
            $table->boolean('status_cupom');
            $table->foreign('id_produto_fk')->references('id_produto')->on('produtos');
            $table->foreign('id_cliente_fk')->references('id_cliente')->on('clientes');
            $table->foreign('id_estabelecimento_fk')->references('id_estabelecimento')->on('estabelecimentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cupons');
    }
}

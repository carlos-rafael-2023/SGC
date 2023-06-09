<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            
            $table->venda_id();
            $table->string('produto',100);
            $table->string('marca',100);
            $table->string('preco',100);
            $table->string('quantidade',100);
            $table->string('total',100);
            $table->string('tipo_venda',100);
            $table->string('codigo_barra',100);
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

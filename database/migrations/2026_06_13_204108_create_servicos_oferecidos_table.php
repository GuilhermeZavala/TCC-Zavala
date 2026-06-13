<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos_oferecidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('servico_id')->nullable();
            $table->float('preco_total', 10, 0)->nullable();
            $table->integer('profissional_id')->nullable();
            $table->float('comissao', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos_oferecidos');
    }
};

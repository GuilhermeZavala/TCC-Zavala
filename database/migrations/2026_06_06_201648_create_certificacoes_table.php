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
        Schema::create('certificacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('titulo')->nullable();
            $table->text('descricao')->nullable();
            $table->text('documento')->nullable();
            $table->timestamps();
            $table->integer('profissional_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificacoes');
    }
};

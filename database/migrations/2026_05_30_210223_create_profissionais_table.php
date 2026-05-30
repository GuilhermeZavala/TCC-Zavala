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
        Schema::create('profissionais', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nome');
            $table->text('curriculo');
            $table->text('foto');
            $table->text('instagram')->nullable();
            $table->text('whatsapp');
            $table->text('email');
            $table->text('carteira_identidade_proficional')->nullable();
            $table->timestamps();
            $table->text('linkedin')->nullable();
            $table->text('youtube')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profissionais');
    }
};

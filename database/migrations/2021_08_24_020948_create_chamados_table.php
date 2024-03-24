<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->text('nome');
            $table->string('pedido');
            $table->string('loja');
            $table->string('categoria');
            $table->text('produto');
            $table->date('datacompra');
            $table->date('dataabertura');
            $table->date('datavistoria')->nullable();
            $table->string('sla');
            $table->longText('ocorrencia');
            $table->string('parecer')->nullable();
            $table->string('resolucao')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamados');
    }
}

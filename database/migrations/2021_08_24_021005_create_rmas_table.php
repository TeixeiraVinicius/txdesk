<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rmas', function (Blueprint $table) {
            $table->id();
            $table->text('produto');
            $table->string('fabricante');
            $table->string('status');
            $table->date('dataabertura');
            $table->string('nf');
            $table->longText('observacao');
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
        Schema::dropIfExists('rmas');
    }
}

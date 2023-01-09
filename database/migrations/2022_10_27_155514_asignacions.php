<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asignacions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('asignacions', function (Blueprint $table) {
            $table->id();
            $table->string('funcionario',60);
            $table->date('fecha');
            $table->time('hora');
            $table->bigInteger('userid')->unsigned();
            $table->bigInteger('estadoid')->unsigned(); 
            $table->timestamps();

            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('estadoid')->references('id')->on('estados');
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
        Schema::dropIfExists('asignacions');
    }
}

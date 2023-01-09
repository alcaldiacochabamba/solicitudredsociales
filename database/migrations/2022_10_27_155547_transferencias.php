<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transferencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('transferencias', function (Blueprint $table) {
            $table->id();
            $table->string('empleado_ega',60);
            $table->string('empleado_ing',60);
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
        Schema::dropIfExists('transferencias');
    }
}

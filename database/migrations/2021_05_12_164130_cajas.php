<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cajas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cajas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('numActa');
            $table->string('numCaja');
            $table->string('numTomosCaja');
            $table->string('areaPert');

            $table->unsignedBigInteger('contratos_id');

            $table->foreign('contratos_id')
            ->references('id')
            ->on('contratos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
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
         Schema::dropIfExists('cajas');
    }
}

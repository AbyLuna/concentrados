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
            $table->bigIncrements('id');
            $table->string('numActa');
            $table->string('numCaja');
            $table->string('numTomosCaja');
            $table->string('areaPert');

            $table->unsignedBigInteger('contrato_id')->nullable();

            $table->foreign('contrato_id')
            ->references('id')
            ->on('contratos')
            ->onDelete('set null');
            
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

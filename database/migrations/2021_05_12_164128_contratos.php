<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contratos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numContrato');
            $table->string('area');
            $table->string('descripcion');
            $table->string('numTomosExp');
            $table->integer('bitacora');


            $table->unsignedBigInteger('caja_id')->nullable();
            $table->foreign('caja_id')
            ->references('id')
            ->on('cajas')
            ->onDelete('set null');

           
            $table->timestamps();
            $table->engine = 'InnoDB';
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

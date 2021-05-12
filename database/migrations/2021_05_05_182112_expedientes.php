<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Expedientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
        {
            Schema::create('expedientes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('numSerie');
                $table->date('fechaApertura');
                $table->date('fechaCierre');
    
                $table->unsignedBigInteger('valorDocumental_id');
                $table->foreign('valorDocumental_id')
                ->references('id')
                ->on('valorDocumental')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    
                $table->unsignedBigInteger('valorInformacion_id');
                $table->foreign('valorInformacion_id')
                ->references('id')
                ->on('valorInformacion')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    
                $table->unsignedBigInteger('vigConcentracion_id');
                $table->foreign('vigConcentracion_id')
                ->references('id')
                ->on('vigConcentracion')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
                $table->unsignedBigInteger('vigTramite_id');
                $table->foreign('vigTramite_id')
                ->references('id')
                ->on('vigTramites')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    
                $table->integer('totalVigencia');
    
                $table->unsignedBigInteger('destinoFinal_id');
                $table->foreign('destinoFinal_id')
                ->references('id')
                ->on('destinoFinal_id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    
                $table->string('signatura');
                
                $table->unsignedBigInteger('location_id')->unique() ;
                $table->foreign('location_id')
                ->references('id')
                ->on('locations')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    
                $table->string('observaciones');
    
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
        //
    }
}

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
                ->on('ValorDocumental')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    
                $table->unsignedBigInteger('valorInformacion_id');
                $table->foreign('valorInformacion_id')
                ->references('id')
                ->on('ValorInformacion')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    
                $table->unsignedBigInteger('vigConcentracion_id');
                $table->foreign('vigConcentracion_id')
                ->references('id')
                ->on('VigConcentracion')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
                $table->unsignedBigInteger('vigTramite_id');
                $table->foreign('vigTramite_id')
                ->references('id')
                ->on('VigTramites')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    
                $table->integer('totalVigencia');
    
                $table->unsignedBigInteger('destinoFinal_id');
                $table->foreign('destinoFinal_id')
                ->references('id')
                ->on('destinoFinal')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    
                $table->string('signatura');
                
                /* $table->unsignedBigInteger('location_id')->unique() ;
                $table->foreign('location_id')
                ->references('id')
                ->on('locations')
                ->onDelete('cascade')
                ->onUpdate('cascade');
    
                $table->string('observaciones');*/
    
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

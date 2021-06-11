<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Locations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pasillo');
            $table->string('anaquel');
            $table->string('imagen');

            $table->unsignedBigInteger('location_id');
                 $table->foreign('location_id')
                 ->references('id')
                 ->on('locations')
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
        //
    }
}

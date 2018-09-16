<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('inscripciones'))
            Schema::create('inscripciones', function(Blueprint $table){
                $table->increments('id');
                $table->string('name');
                $table->string('surname');
                $table->string('email');
                $table->string('telefono');
                $table->string('institucion')->nullable();
                $table->string('promocional');
                $table->integer('forma_pago');
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

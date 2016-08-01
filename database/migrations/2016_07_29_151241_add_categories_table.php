<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id'); //crea un campo autoincremental
            $table->string('name',100); //la funcion string puede llevar dos valores, 1-nombre y 2- (opcional) tamaño del campo si se deja en blanco lo crea de 255
            $table->timestamps();  //crea dos campos -created y -updated 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}

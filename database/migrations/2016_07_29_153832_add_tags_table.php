<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        //creacion de tabla pivote para relacion muchos a muchos
        //laravel exige que las tablas de relaciones muchos a muchos se llamen como las tablas que esta relacionando, pero en singular y unidas por _
        Schema::create('article_tag',function(Blueprint $table){
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::drop('tags');
    }
}

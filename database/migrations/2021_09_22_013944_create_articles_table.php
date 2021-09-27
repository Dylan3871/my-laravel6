<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id','40');
            $table->string('title','255');
            $table->string('img','150');
            $table->string('subtitle','150');
            $table->text('body','200');
            //declaracio de llaves foraneas//
            $table->integer('category_id')->usigned();
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('img_id')->unsigned();
            $table->foreign('img_id')->references('id')->on('images');
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
        Schema::dropIfExists('articles');
    }
}

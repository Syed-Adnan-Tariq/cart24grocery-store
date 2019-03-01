<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('title');
            $table->string('imagePath');
            $table->string('videoPath');
            $table->integer('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('discount')->default(0);
            $table->longText('ingredients');
            $table->longText('cooking_method');
            $table->integer('serve');
            $table->string('cooking_time');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('recipes');
    }
}

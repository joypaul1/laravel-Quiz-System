<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',256)->nullable();
            $table->string('sub_title',256)->nullable();
            $table->string('button_text',256)->nullable();
            $table->string('link',256)->nullable();
            $table->string('image',256)->nullable();
            $table->enum('type', array('home_slider', 'home_slider2'))->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('banner_models');
    }
}

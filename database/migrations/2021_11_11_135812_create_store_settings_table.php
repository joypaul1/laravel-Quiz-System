<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name',100)->nullable();
            $table->text('company_slogan',100)->nullable();
            $table->string('logo',256)->nullable();
            $table->string('dark_logo',256)->nullable();
            $table->string('fav_icon',256)->nullable();
            $table->string('notfound_image',256)->nullable();
            $table->string('payment_method_logo',256)->nullable();
            $table->string('email2',100)->nullable();
            $table->string('email3',100)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('mobile2',100)->nullable();
            $table->text('address2',256)->nullable();
            $table->text('address3',256)->nullable();
            $table->text('about_company',256)->nullable();
            $table->text('free_shipping_sms',256)->nullable();
            $table->text('support_sms',256)->nullable();
            $table->text('money_return_sms',256)->nullable();
            $table->text('copyright',256)->nullable();
            $table->text('map',256)->nullable();
            $table->text('live_chat',256)->nullable();
            $table->string('author',100)->nullable();
            $table->string('title',256)->nullable();
            $table->text('meta_description',256)->nullable();
            $table->text('meta_keyword',256)->nullable();
            $table->enum('robots', array('index', 'follow','index,follow','noindex, nofollow'))->nullable();
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
        Schema::dropIfExists('store_settings');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->increments('flat_id');
            $table->string('flat_location');
            $table->string('flat_address');
            $table->integer('flat_price');
            $table->integer('bed_price');
            $table->boolean('flat_services');
            $table->text('flat_description');
            $table->string('cover_image');
            $table->integer('status')->default(1);
            $table->integer('activate')->default(0);
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
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
        Schema::dropIfExists('flats');
    }
}

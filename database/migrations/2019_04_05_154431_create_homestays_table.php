<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomestaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestays', function (Blueprint $table) {
           $table->Increments('id');
            $table->unsignedinteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            //$table->string('type');
            $table->string('category');
            $table->unsignedinteger('capacity');
            $table->string('service');

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
        Schema::dropIfExists('homestays');
    }
}

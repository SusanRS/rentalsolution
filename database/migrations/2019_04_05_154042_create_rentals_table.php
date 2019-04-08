<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedinteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            //$table->string('type');
            $table->string('category');
            $table->string('bhk');
            $table->unsignedinteger('num_rooms');
            $table->boolean('parking')->default(0);

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
        Schema::dropIfExists('rentals');
    }
}

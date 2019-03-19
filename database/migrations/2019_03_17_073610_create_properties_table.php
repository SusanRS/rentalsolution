<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedinteger('user_id');
            $table->string('address');
            $table->biginteger('price');
            $table->string('legal_docs')->nullable();
            $table->text('descriptions');
            $table->boolean('isapproved')->default(0);
            $table->boolean('isavailable')->default(0);;
            $table->string('property_type');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}

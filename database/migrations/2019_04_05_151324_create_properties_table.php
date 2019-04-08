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
            $table->Increments('id');
            $table->unsignedinteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('district');
            $table->string('city');
            $table->string('street');
            $table->unsignedinteger('ward_no');
            $table->unsignedinteger('price');
            $table->string('type');
            $table->string('legal_docs')->nullable();
            $table->string('description');
            $table->boolean('isapproved')->default(0);
            $table->boolean('isavailable')->default(0);
            $table->boolean('ispremium')->default(0);
            $table->boolean('isbooked')->default(0);
            // $table->integer('buyable_id');
            // $table->string('buyable_type');
            
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
        Schema::dropIfExists('properties');
    }
}

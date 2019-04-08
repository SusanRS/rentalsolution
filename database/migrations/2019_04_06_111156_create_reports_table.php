<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedinteger('user_id');
            $table->unsignedinteger('property_id');
            $table->string('message');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
}

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
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //address
            $table->string('district');
            $table->string('city');
            $table->unsignedinteger('ward_no');
            $table->string('street_address');
            
            $table->string('property_type');
            $table->biginteger('price');
            //rent
            $table->string('type')->nullable();
            $table->string('floor')->nullable();
            $table->string('bhk')->nullable();
            $table->unsignedinteger('num_rooms')->nullable();
            $table->string('parking')->nullable();
            
            

            //homestay
            $table->string('home')->nullable();
          
            
            $table->string('legal_docs')->nullable();
            $table->text('descriptions');
            $table->boolean('isapproved')->default(0);
            $table->boolean('isavailable')->default(0);;
            $table->boolean('isbooked')->default(0);;
            
            $table->timestamps();
            $table->softDeletes();

           
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

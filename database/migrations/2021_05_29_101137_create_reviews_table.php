<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            /*
                This is the way LARAVEL is creating your tables by default 
                which has a data type as "integer".

                    $table->bigIncrements('id);

                To use a different approach we can use UUID.
                UUID (Universally Unique ID) also known as 
                GUID (Globaly Unique ID) which has a data 
                type as "string" with a lenght of 36 characters.
                
                In LARAVEL we will also need to embed the "Primary()" 
                function to the new "uuid" field. The model of this respective
                table will have some redefinitions to be done too.
            */
            $table->uuid('id')->primary();
        
            $table->timestamps();
            
            $table->unsignedTinyInteger('rating');
            $table->text('content');

            $table->unsignedBigInteger('bookable_id')->index();
            $table->foreign('bookable_id')->references('id')->on('bookables');

            $table->unsignedBigInteger('booking_id')->index()->nullable();
            $table->foreign('booking_id')->references('id')->on('bookables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}

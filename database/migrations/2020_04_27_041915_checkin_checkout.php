<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CheckinCheckout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkinCheckout', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('staff');
            $table->date('word_day');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->timestamps();

            // cach tao 2 khoa chinh
            // $table->string('staff');
            // $table->date('word_day');
            // $table->time('start_time')->nullable();
            // $table->time('end_time')->nullable();
            // $table->primary(['staff', 'word_day']);
            // $table->timestamps();




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

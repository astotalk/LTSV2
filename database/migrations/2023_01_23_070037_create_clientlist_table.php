<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientlist', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_phone');
            $table->string('client_address');
            $table->string('pin_code');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('gst');
            $table->string('pan_card');
            $table->string('concerned_name');
            $table->string('concerned_person_phone');
            $table->string('sms');
            $table->string('othercrmid');
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
        Schema::dropIfExists('clientlist');
    }
}

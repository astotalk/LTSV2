<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddservicenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addservicenter', function (Blueprint $table) {
            $table->id();
            $table->string('service_center_name');
            $table->string('eng_name');
            $table->string('phone');
            $table->string('other_number');
            $table->string('address');
            $table->string('pin_code');
            $table->string('block');
            $table->string('district');
            $table->string('state');
            $table->string('gst');
            $table->string('sf_approved_by');
            $table->string('user_name');
            $table->string('password');
            $table->string('remark');
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
        Schema::dropIfExists('addservicenter');
    }
}

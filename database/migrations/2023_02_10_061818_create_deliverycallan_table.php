<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverycallanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverycallan', function (Blueprint $table) {
            $table->id();
            $table->string('service_center_name');
            $table->string('part_name');
            $table->string('remark');
            $table->string('unitrate');
            $table->string('quantity');
            $table->string('gst');
            $table->string('value');
            $table->string('callan_date');
            $table->text('challan_id');
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
        Schema::dropIfExists('deliverycallan');
    }
}

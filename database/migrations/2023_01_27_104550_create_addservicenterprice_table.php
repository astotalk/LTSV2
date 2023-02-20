<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddservicenterpriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addservicenterprice', function (Blueprint $table) {
            $table->id();
            $table->string('service_center_name');
            $table->string('product_type');
            $table->string('CallCharge');
            $table->string('FreeKM');
            $table->string('AmountAfterFreeKM');
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
        Schema::dropIfExists('addservicenterprice');
    }
}

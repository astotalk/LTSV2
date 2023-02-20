<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddcomplaitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addcomplaits', function (Blueprint $table) {
            $table->id();
            $table->string('custom_name');
            $table->string('custom_mobile');
            $table->string('other_mobile');
            $table->string('tat');
            $table->string('dates');
            $table->string('escalation');
            $table->string('custom_address');
            $table->string('pin_code');
            $table->string('block');
            $table->string('district');
            $table->string('state');
            $table->string('type_complaint');
            $table->string('date');
            $table->string('type_brand');
            $table->string('type_model');
            $table->string('warrenty_number');
            $table->string('product_type');
            $table->string('visit_type');
            $table->string('company_detail');
            $table->string('remark');
            $table->string('status');
            $table->string('complaint_id');
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
        Schema::dropIfExists('addcomplaits');
    }
}

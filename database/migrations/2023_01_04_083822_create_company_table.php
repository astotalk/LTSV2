<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('phone');
            $table->string('email');
            $table->string('incorporation_num');
            $table->string('gst');
            $table->string('pan_card');
            $table->string('date');
            $table->string('pin_code');
            $table->string('register_address');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('file_upload');
            $table->string('website');
            $table->string('desigantion');
            $table->string('name');
            $table->string('email_id');
            $table->string('phone_number');
            $table->string('bank_name');
            $table->string('beneficiary_name');
            $table->string('account_number');
            $table->string('branch_name');
            $table->string('ifsc_code');
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
        Schema::dropIfExists('company');
    }
}

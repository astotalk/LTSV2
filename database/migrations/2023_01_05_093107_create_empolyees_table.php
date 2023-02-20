<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpolyeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('emp_code')->unique();
            $table->string('email');
            $table->string('phone');
            $table->string('alernate_number');
            $table->string('father_name');
            $table->string('father_mobile');
            $table->string('father_occupation');
            $table->string('desigantion');
            $table->string('department');
            $table->string('permanent_address');
            $table->string('country_id');
            $table->string('region_id');
            $table->string('city_id');
            $table->string('current_address');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('status');
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
        Schema::dropIfExists('empolyees');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense', function (Blueprint $table) {
            $table->id();
            $table->string('expesce_date');
            $table->string('PaidCat');
            $table->string('amount');
            $table->string('paid_through');
            $table->string('enter_mobile');
            $table->string('transaction');
            $table->string('paid_by');
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
        Schema::dropIfExists('expense');
    }
}

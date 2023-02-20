<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockentryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockentry', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('stock');
            $table->string('part_name');
            $table->string('quantity');
            $table->string('ReceivedDate');
            $table->string('ReceivedBy');
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
        Schema::dropIfExists('stockentry');
    }
}

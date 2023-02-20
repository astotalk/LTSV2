<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddpartLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addpart_link', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('product_type');
            $table->string('part_name');
            $table->string('part_code');
            $table->string('part_cost');
            $table->string('status');
            
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
        Schema::dropIfExists('addpart_link');
    }
}

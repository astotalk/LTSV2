<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Addbrand;
class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('product_model_name');
            $table->string('category_name');
            $table->string('product_type');
            $table->string('brand_name');
            $table->string('price');
            $table->string('gst');
            $table->string('inventory');
            $table->string('hsn');
            $table->string('status');
            $table->string('upload_image');
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
        Schema::dropIfExists('product');
    }
}

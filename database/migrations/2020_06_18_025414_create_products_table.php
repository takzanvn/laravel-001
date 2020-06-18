<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            //
            $table->increments('product_id');
            $table->string('product_name');
            $table->string('product_scale');
            $table->string('product_vendor');
            $table->string('product_description');
            $table->integer('quantity_in_stock');
            $table->integer('buy_price');
            $table->string('msrp');
            $table->integer('product_line_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

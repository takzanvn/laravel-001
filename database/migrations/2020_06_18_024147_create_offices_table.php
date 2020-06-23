<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('city', 60);
            $table->string('phone', 20);
            $table->string('address_line1', 100)->nullalbe();
            $table->string('address_line2', 100)->nullable();
            $table->string('state', 50);
            $table->string('country', 100);
            $table->integer('postal_code');
            $table->string('territory', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}

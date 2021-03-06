<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('username', 30);
            $table->string('last_name', 40);
            $table->string('first_name', 60);
            $table->string('phone', 20);
            $table->string('address_line1', 100)->nullable();
            $table->string('address_line2', 100)->nullable();
            $table->string('city', 100);
            $table->string('state', 100);
            $table->integer('postal_code');
            $table->string('country', 100);
            $table->integer('credit_limit');
            $table->foreignId('sales_rep_employee_id')->constrained('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

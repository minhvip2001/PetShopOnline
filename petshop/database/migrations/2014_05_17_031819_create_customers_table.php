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
            $table->increments('customer_id');
            $table->string('customer_surname');
            $table->string('customer_name');
            $table->string('customer_email')->unique();
            $table->string('customer_password');
            $table->string('customer_phone')->unique();
            $table->string('customer_note')->nullable();
            $table->string('customer_avatar')->nullable();
            $table->string('customer_company')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_country')->nullable();
            $table->string('customer_city')->nullable();
            $table->string('customer_district')->nullable();
            $table->string('customer_ward')->nullable();          
            $table->string('customer_zip_code')->nullable();
            $table->string('customer_status')->default('true');
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
        Schema::dropIfExists('customers');
    }
}

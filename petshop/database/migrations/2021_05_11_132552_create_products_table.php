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
            $table->increments('product_id');
            $table->string('product_name');
            $table->string('product_feature_image')->nullable();
            $table->string('product_content')->nullable();
            $table->string('product_description')->nullable();
            $table->string('product_price');
            $table->string('product_hot')->nullable();
            $table->integer('product_ordinal')->nullable();
            $table->string('product_status')->default('true');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('brand_id')->on('brands')->onDelete('cascade')->onUpdate('cascade');  
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade')->onUpdate('cascade');  
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');  
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
        Schema::dropIfExists('products');
    }
}

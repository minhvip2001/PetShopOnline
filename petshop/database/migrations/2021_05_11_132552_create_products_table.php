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
            $table->text('product_content')->nullable();
            $table->text('product_description')->nullable();
            $table->integer('product_price');
            $table->integer('product_price_sale');
            $table->string('product_hot')->nullable();
            $table->integer('product_ordinal')->nullable();
            $table->string('product_status')->default('true');
            $table->string('product_slug');
            $table->integer('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('brand_id')->on('brands')->onDelete('cascade')->onUpdate('cascade');  
            $table->integer('category_id')->unsigned()->nullable();
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

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
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->bigInteger('seller_id')->unsigned();
            $table->foreign('seller_id')->references('seller_id')->on('sellers');
            $table->bigInteger('cat_id')->unsigned()->nullable();
            $table->foreign('cat_id')->references('category_id')->on('productcats');
            $table->bigInteger('price');
            $table->float('rating');
            $table->bigInteger('stock');
            $table->mediumText('description')->nullable();
            $table->string('filename')->nullable(); //photo
            $table->string('mime')->nullable(); //photo
            $table->string('original_filename')->nullable(); //photo

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

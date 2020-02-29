<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('transaction_id');
            $table->bigInteger('buyer_id')->unsigned();
            $table->foreign('buyer_id')->references('user_id')->on('users');
            $table->bigInteger('prod_id')->unsigned();
            $table->foreign('prod_id')->references('product_id')->on('products');
            $table->smallInteger('quantity');
            $table->date('transaction_date');
            $table->boolean('isDelivered')->default(0);
            $table->date('delivered_at')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}

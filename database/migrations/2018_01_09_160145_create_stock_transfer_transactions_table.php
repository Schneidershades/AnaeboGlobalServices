<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTransferTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_transfer_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stock_id')->unsigned()->index();
            $table->integer('rate')->unsigned()->index();
            $table->integer('quantity');
            $table->integer('stock_transfer_id')->unsigned()->index();
            $table->decimal('valuation', 40, 2)->default(0);
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('cascade');
            $table->foreign('stock_transfer_id')->references('id')->on('stock_transfers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_transfer_transactions');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identifier')->uniqid();
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->integer('recieving_user_id')->unsigned()->index()->nullable();
            $table->integer('branch_id_from')->unsigned()->index()->nullable();
            $table->integer('branch_id_to')->unsigned()->index()->nullable();
            $table->decimal('grandTotal', 40, 2)->default(0);
            $table->integer('approved')->default(0);
            $table->string('status')->default('Cancelled');
            $table->boolean('finished')->default(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('recieving_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('branch_id_from')->references('id')->on('branches')->onDelete('cascade');
            $table->foreign('branch_id_to')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_transfers');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_approvals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wallet_id')->unsigned()->index();
            $table->integer('approved')->default(false);
            $table->integer('user_id')->unsigned()->index();

            $table->decimal('amount', 40, 2)->default(0);
            $table->integer('customer_id')->unsigned()->index();


            $table->softDeletes();
            $table->timestamps();

            $table->foreign('wallet_id')->references('id')->on('wallets')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet_approvals');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identifier')->uniqid();
            $table->integer('customer_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('branch_id')->unsigned()->index()->nullable();
            $table->decimal('discount', 40, 2)->default(0);
            $table->decimal('grandTotal', 40, 2)->default(0);
            $table->decimal('paid', 40, 2)->default(0);
            $table->decimal('due', 40, 2)->default(0);
            $table->string('paymentType')->default('null');
            $table->string('paymentStatus')->default('None');
            $table->string('status')->default('Cancelled');
            $table->boolean('finished')->default(false);
            $table->integer('approved')->default(0);
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}

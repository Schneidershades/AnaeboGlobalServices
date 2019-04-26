<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identifier')->uniqid();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('supplier_id')->unsigned()->index()->nullable();
            $table->decimal('cost', 40, 2)->default(0);
            $table->decimal('valuation', 40, 2)->default(0);
            $table->integer('approved')->default(0);
            $table->integer('branch_id')->unsigned()->index()->nullable();
            $table->decimal('grandTotal', 40, 2)->default(0);
            $table->string('status')->default('Cancelled');
            $table->boolean('finished')->default(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
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
        Schema::dropIfExists('purchases');
    }
}

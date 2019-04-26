<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockApprovalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_approvals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('approved')->default(false);
            $table->integer('stock_id')->unsigned()->index();
            $table->string('name')->nullable();
            $table->string('abbr')->nullable();
            $table->decimal('bulkbreaker', 40, 2)->default(0);
            $table->decimal('field_retail', 40, 2)->default(0);
            $table->decimal('retail_vsm', 40, 2)->default(0);
            $table->decimal('special_price', 40, 2)->default(0);
            $table->integer('quantity')->nullable();
            $table->integer('branch_id')->unsigned()->index();

            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('cascade');
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
        Schema::dropIfExists('stock_approvals');
    }
}

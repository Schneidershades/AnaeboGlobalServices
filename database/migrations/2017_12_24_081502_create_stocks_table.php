<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('stock_category_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->string('abbr');
            $table->decimal('bulkbreaker', 40, 2)->default(0);
            $table->decimal('field_retail', 40, 2)->default(0);
            $table->decimal('retail_vsm', 40, 2)->default(0);
            $table->decimal('special_price', 40, 2)->default(0);
            $table->integer('quantity');
            $table->integer('approved')->default(0);
            $table->integer('branch_id')->unsigned()->index();
            $table->softDeletes();
            $table->timestamps();

            
            $table->foreign('stock_category_id')->references('id')->on('stock_categories')->onDelete('cascade');
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
        Schema::dropIfExists('stocks');
    }
}

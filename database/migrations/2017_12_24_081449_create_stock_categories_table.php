<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('empties_sales', 40, 2)->default(0);
            $table->decimal('offloading_boys_pay', 40, 2)->default(0);
            $table->decimal('motor_boys_pay', 40, 2)->default(0);
            $table->decimal('drivers_pay', 40, 2)->default(0);
            $table->integer('user_id')->unsigned()->index();
            $table->softDeletes();
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_categories');
    }
}

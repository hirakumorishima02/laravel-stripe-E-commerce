<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cart', function(Blueprint $table)
      {
        $table->increments('id');
        $table->unsignedBigInteger('user_id');
        $table->unsignedInteger('order_id')->nullable();
        $table->unsignedInteger('product_id');
        $table->integer('complete')->default(0);
        $table->integer('qty');
        $table->decimal('price', 8, 2);
        $table->timestamps();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}

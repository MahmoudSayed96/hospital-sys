<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_stocks', function (Blueprint $table) {
            $table->id();
            $table->enum('type', [0, 1])->default(0);
            $table->enum('action', [0, 1])->default(0);
            $table->unsignedBigInteger('stock_id');
            $table->unsignedBigInteger('quantity')->default(0);
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
        Schema::dropIfExists('order_stocks');
    }
}

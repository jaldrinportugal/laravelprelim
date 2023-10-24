<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id('OrderDetailID');
            $table->unsignedInteger('OrderID');
            $table->foreign('OrderID')->references('OrderID')->on('order');
            $table->unsignedInteger('ProductID');
            $table->foreign('ProductID')->references('ProductID')->on('products');
            $table->string('Quantity');
            $table->string('Subtotal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};

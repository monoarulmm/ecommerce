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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('user_id')->nullable();
            $table->string('email')->nullable();
            $table->string('slug')->unique();

            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->string('product')->nullable();
            $table->string('shop')->nullable();
            $table->string('return')->nullable();
            $table->string('regular_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('sale_percent')->nullable();
            $table->string('SKU')->nullable();
            $table->string('warranty')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('tag')->nullable();
            $table->string('authentic')->nullable();
            $table->string('stock_status')->nullable();
            $table->string('featured')->nullable();
            $table->string('quantity')->nullable();
            $table->string('img')->nullable();
            $table->string('image')->nullable();
            $table->string('images')->nullable();

            $table->timestamps();
          
          
     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

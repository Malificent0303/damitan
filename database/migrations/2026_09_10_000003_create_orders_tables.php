<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('reference')->unique();
            $table->string('street_address');
            $table->string('city');
            $table->string('zip_code', 20);
            $table->string('phone', 40);
            $table->string('shipping_method');
            $table->string('payment_method');
            $table->decimal('subtotal', 10, 2);
            $table->decimal('shipping_fee', 10, 2);
            $table->decimal('discount', 10, 2);
            $table->decimal('total', 10, 2);
            $table->string('status')->default('pending');
            $table->timestamps();
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
            $table->string('product_slug');
            $table->string('product_name');
            $table->unsignedInteger('quantity');
            $table->decimal('unit_price', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
    }
};

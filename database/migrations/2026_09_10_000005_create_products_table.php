<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('badge')->nullable();
            $table->string('category');
            $table->string('icon')->default('checkroom');
            $table->decimal('price', 10, 2);
            $table->decimal('original_price', 10, 2);
            $table->text('description');
            $table->unsignedInteger('stock')->default(0);
            $table->timestamps();
        });

        DB::table('products')->insert([
            ['slug' => 'playday-cotton-tee', 'name' => 'Playday Cotton Tee', 'badge' => 'Kids Favorite', 'category' => 'Kids Wear', 'icon' => 'checkroom', 'price' => 299, 'original_price' => 349, 'description' => 'A soft cotton tee made for school, play, weekend errands, and all-day comfort.', 'stock' => 284, 'created_at' => now(), 'updated_at' => now()],
            ['slug' => 'comfy-everyday-shirt', 'name' => 'Comfy Everyday Shirt', 'badge' => 'Best Seller', 'category' => 'Adult Wear', 'icon' => 'styler', 'price' => 399, 'original_price' => 499, 'description' => 'A soft, easy-to-style shirt made for everyday errands, school activities, casual family days, and comfortable lounging.', 'stock' => 126, 'created_at' => now(), 'updated_at' => now()],
            ['slug' => 'matchy-daily-set', 'name' => 'Matchy Daily Set', 'badge' => 'Family Favorite', 'category' => 'Family Set', 'icon' => 'family_restroom', 'price' => 699, 'original_price' => 799, 'description' => 'Coordinated everyday pieces for cute family OOTD moments and comfortable days together.', 'stock' => 64, 'created_at' => now(), 'updated_at' => now()],
            ['slug' => 'little-explorer-shorts', 'name' => 'Little Explorer Shorts', 'badge' => 'Play Ready', 'category' => 'Kids Wear', 'icon' => 'child_care', 'price' => 249, 'original_price' => 299, 'description' => 'Light, easy shorts for active kids, warm days, and comfortable everyday adventures.', 'stock' => 32, 'created_at' => now(), 'updated_at' => now()],
            ['slug' => 'soft-lounge-top', 'name' => 'Soft Lounge Top', 'badge' => 'Comfy Pick', 'category' => 'Adult Wear', 'icon' => 'dry_cleaning', 'price' => 449, 'original_price' => 499, 'description' => 'A relaxed top made for comfort at home, quick errands, and easy casual styling.', 'stock' => 118, 'created_at' => now(), 'updated_at' => now()],
            ['slug' => 'weekend-wear-pack', 'name' => 'Weekend Wear Pack', 'badge' => 'Value Pack', 'category' => 'Bundle', 'icon' => 'redeem', 'price' => 899, 'original_price' => 999, 'description' => 'A practical bundle of everyday favorites for repeat weekly outfits and relaxed weekends.', 'stock' => 21, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

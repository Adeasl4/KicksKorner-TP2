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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Link to products table
            $table->unsignedBigInteger('order_id'); // Assuming you want to group products in an order
            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade'); // Link to users table
            $table->integer('quantity'); // Number of products ordered
            $table->decimal('total_price', 8, 2); // Total price for these products
            $table->timestamps();
        });
     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout');
    }
};

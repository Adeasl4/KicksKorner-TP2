<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable(); // Assumes orders might be grouped or tracked
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // FK to products
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // FK to users (renamed from 'customer_id' for clarity)
            $table->integer('quantity');
            $table->decimal('total_price', 10, 2); // Adjust precision as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};

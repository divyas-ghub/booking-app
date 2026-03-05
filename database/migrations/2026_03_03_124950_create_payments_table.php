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
        Schema::create('payments', function (Blueprint $table) {
                $table->id();

                $table->foreignId('booking_id')->constrained()->onDelete('cascade');

                $table->decimal('amount', 10, 2);
                $table->string('method', 20);           // e.g., "card", "upi", "cash"
                $table->string('status', 20)
                    ->default('pending');             // pending, paid, failed, refunded

                $table->string('txn_id')->nullable();   // external payment gateway ID
                $table->string('provider')->nullable(); // e.g., "stripe", "razorpay"

                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

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
        Schema::create('pricing_plan_prices', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pricing_plan_id')
                ->constrained('pricing_plans')
                ->cascadeOnDelete();

            $table->string('billing_key'); // monthly | one-time

            $table->string('currency', 5)->default('£'); // £, $, AED, INR etc
            $table->string('amount_text'); // 499, 1,499, Let’s talk
            $table->string('period_text')->nullable(); // per month | one-time

            $table->unsignedInteger('sort_order')->default(0);

            $table->unique(['pricing_plan_id', 'billing_key']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_plan_prices');
    }
};

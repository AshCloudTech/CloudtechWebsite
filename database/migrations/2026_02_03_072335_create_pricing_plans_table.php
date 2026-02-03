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
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();

            $table->string('key')->unique(); // starter, growth, enterprise
            $table->string('badge_text')->nullable(); // Starter, Most Popular, Custom
            $table->string('badge_variant')->nullable(); // default, cyan, navy (maps to CSS class)
            $table->string('title'); // Launch Website, Growth, Enterprise
            $table->string('subtitle')->nullable(); // optional short label
            $table->text('description')->nullable();

            $table->boolean('is_featured')->default(false);
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);

            // CTA
            $table->string('cta_text')->default('Get Started →');
            $table->string('cta_url')->default('/contact');
            $table->string('cta_variant')->default('primary'); // primary / ghost

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};

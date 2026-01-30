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
 Schema::create('portfolio_items', function (Blueprint $table) {
    $table->id();

    $table->foreignId('portfolio_platform_id')
        ->constrained('portfolio_platforms')
        ->cascadeOnDelete();

    $table->string('title', 140);
    $table->string('slug', 160)->unique();

    $table->string('industry', 80)->nullable();
    $table->json('tags')->nullable();

    $table->string('short_description', 255)->nullable();

    $table->string('website_url', 500)->nullable();
    $table->boolean('is_live')->default(true);

    $table->string('thumbnail_image')->nullable();
    $table->string('thumb_alt', 160)->nullable();

    $table->unsignedInteger('sort_order')->default(0);
    $table->boolean('is_published')->default(true);

    $table->timestamps();

    // ✅ short index name to avoid MySQL identifier too long
    $table->index(['portfolio_platform_id', 'is_published', 'sort_order'], 'pi_plat_pub_sort_idx');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_items');
    }
};

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
        Schema::create('pricing_services', function (Blueprint $table) {
            $table->id();
            $table->string('category', 50)->default('seo')->index(); // 'seo' or 'web'
            $table->string('service', 180);
            $table->string('price', 60)->nullable();
            $table->string('prefix', 10)->default('£');
            $table->string('per', 20)->nullable(); // e.g. '/mo'
            $table->string('model', 255)->nullable();
            $table->string('page_url', 255)->nullable();
            $table->string('page_route', 120)->nullable();
            $table->boolean('noindex')->default(false);
            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->boolean('is_active')->default(true)->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_services');
    }
};

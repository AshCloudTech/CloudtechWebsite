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
         Schema::create('portfolio_platforms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);                // WordPress, Wix, GoDaddy
            $table->string('slug', 80)->unique();      // wordpress, wix, godaddy
            $table->string('badge_color', 30)->nullable(); // optional: blue/orange/cyan (frontend badge style)
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_platforms');
    }
};

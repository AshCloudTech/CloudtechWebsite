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
       Schema::create('case_studies', function (Blueprint $table) {
            $table->id();

            // Core
            $table->string('title', 180);
            $table->string('slug', 200)->unique();

            $table->string('subtitle', 255)->nullable();     // detail hero subtitle
            $table->string('excerpt', 255)->nullable();      // list card description
            $table->string('industry', 120)->nullable();     // filter label
            $table->string('industry_tag_color', 30)->nullable(); // blue/purple/green (optional UI)

            $table->string('client_name', 150)->nullable();
            $table->string('year', 10)->nullable();          // "2024" or "2023–24"

            // Images (store paths like uploads/case-studies/xxx.webp)
            $table->string('card_image', 255)->nullable();   // list card image
            $table->string('hero_image', 255)->nullable();   // detail hero image

            // Detail copy
            $table->string('challenge_title', 120)->nullable();
            $table->text('challenge_body')->nullable();

            $table->string('solution_title', 120)->nullable();
            $table->text('solution_body')->nullable();

            // Impact + headings
            $table->string('features_heading', 120)->nullable();   // "Key Features"
            $table->string('features_subheading', 255)->nullable();

            $table->string('impact_heading', 120)->nullable();     // "Results & Impact"
            $table->string('impact_subheading', 255)->nullable();

            // Testimonial
            $table->string('testimonial_badge', 10)->nullable();   // "GL"
            $table->text('testimonial_quote')->nullable();
            $table->string('testimonial_author_name', 120)->nullable();
            $table->string('testimonial_author_title', 180)->nullable();

            // SEO
            $table->string('meta_title', 255)->nullable();
            $table->string('meta_description', 255)->nullable();

            // Publishing
            $table->boolean('is_published')->default(false)->index();
            $table->unsignedInteger('sort_order')->default(0)->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};

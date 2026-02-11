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
        Schema::create('case_study_testimonials', function (Blueprint $table) {
            $table->id();

            $table->foreignId('case_study_id')
                ->constrained('case_studies')
                ->cascadeOnDelete();

            // Content
            $table->string('badge')->nullable();               // e.g. "Client Feedback"
            $table->text('quote');                             // required testimonial quote

            // Author details
            $table->string('author_name')->nullable();         // e.g. "Mark Johnson"
            $table->string('author_title')->nullable();        // e.g. "Product Director"
            $table->string('author_company')->nullable();      // e.g. "GL Assessment"

            // Media
            $table->string('author_avatar')->nullable();       // image path (public or storage url)
            $table->string('company_logo')->nullable();        // optional logo path

            // Rating / metadata
            $table->unsignedTinyInteger('rating')->nullable(); // 1..5
            $table->string('source')->nullable();              // e.g. "Email", "Clutch", "Google"
            $table->string('source_url')->nullable();          // optional link

            // Display control
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(true);
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();

            $table->index(['case_study_id', 'is_published', 'is_featured', 'sort_order'], 'cst_pub_feat_sort_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_study_testimonials');
    }
};

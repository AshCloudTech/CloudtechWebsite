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
        Schema::create('audit_leads', function (Blueprint $table) {
            $table->id();

            // What audit/service CTA was clicked (ex: "technical-seo", "google-ads", etc.)
            $table->string('audit_type', 120)->index();

            // Helpful for tracking
            $table->string('source_page', 255)->nullable();   // route name or custom label
            $table->string('page_url', 500)->nullable();      // full URL where CTA was clicked
            $table->string('utm_source', 100)->nullable();
            $table->string('utm_medium', 100)->nullable();
            $table->string('utm_campaign', 120)->nullable();

            // Lead info
            $table->string('name', 120);
            $table->string('email', 190)->index();
            $table->string('phone', 30)->nullable();
            $table->text('reason')->nullable();

            // Admin pipeline tracking
            $table->string('status', 40)->default('new')->index();
            // new | contacted | in_progress | qualified | not_reachable | closed

            $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('contacted_at')->nullable();

            $table->text('admin_notes')->nullable();

            // Meta
            $table->ipAddress('ip_address')->nullable();
            $table->string('user_agent', 500)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_leads');
    }
};

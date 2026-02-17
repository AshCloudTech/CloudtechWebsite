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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();

            // Step 1 (Personal Info)
            $table->string('full_name');
            $table->string('company_name')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('website_url')->nullable();

            // Step 2 (Project Details - New fields)
            $table->string('project_type')->nullable();
            $table->string('service_needed')->nullable();
            $table->string('industry')->nullable();
            $table->text('project_description')->nullable();
            $table->string('budget_range')->nullable();
            $table->string('timeline')->nullable();

            // Step 3 (Final Details - New fields)
            $table->text('specific_requirements')->nullable();
            $table->string('reference_projects')->nullable();
            $table->string('project_urgency')->nullable();
            $table->string('hear_about_us')->nullable();

            // Old checkbox sections (keep for backward compatibility)
            $table->json('services_interested_in')->nullable();
            $table->string('services_other')->nullable();

            $table->json('website_development')->nullable();
            $table->string('website_development_other')->nullable();

            $table->text('brief_description')->nullable();
            $table->string('approximate_budget')->nullable();

            // Old scheduling fields (nullable if new UI doesn't use them)
            $table->string('preferred_method')->nullable(); // phone_call|zoom|google_meet|whatsapp
            $table->dateTime('preferred_datetime')->nullable();

            $table->text('additional_notes')->nullable();

            // Admin management
            $table->string('status')->default('new'); // new|in_review|scheduled|completed|closed|spam
            $table->timestamp('handled_at')->nullable();
            $table->unsignedBigInteger('handled_by')->nullable(); // admin user id (optional)
            $table->timestamps();

            $table->index(['status', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};

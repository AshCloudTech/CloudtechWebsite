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

            $table->string('full_name');
            $table->string('company_name');
            $table->string('phone');
            $table->string('email');
            $table->string('website_url')->nullable();

            // checkboxes
            $table->json('services_interested_in')->nullable();
            $table->string('services_other')->nullable();

            $table->json('website_development')->nullable();
            $table->string('website_development_other')->nullable();

            $table->text('brief_description')->nullable();
            $table->string('approximate_budget');

            $table->string('hear_about_us')->nullable();
            $table->string('preferred_method'); // phone_call|zoom|google_meet|whatsapp
            $table->dateTime('preferred_datetime');

            $table->text('additional_notes')->nullable();

            // admin management
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

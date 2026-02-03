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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('legal_name')->nullable();
            $table->string('brand_name');
            $table->string('slug')->unique();
            $table->string('tagline')->nullable();
            $table->longText('about')->nullable();
            $table->boolean('is_active')->default(true);

            $table->string('primary_email')->nullable();
            $table->string('support_email')->nullable();
            $table->string('sales_email')->nullable();

            $table->string('primary_phone')->nullable();
            $table->string('secondary_phone')->nullable();
            $table->string('whatsapp')->nullable();

            $table->string('address_line1')->nullable();
            $table->string('address_line2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country_code', 2)->nullable();
            $table->string('timezone')->nullable();

            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('google_maps_url')->nullable();
            $table->string('google_place_id')->nullable();

            $table->string('logo_light_path')->nullable();
            $table->string('logo_dark_path')->nullable();
            $table->string('favicon_path')->nullable();
            $table->string('og_image_path')->nullable();
            $table->string('company_seal_path')->nullable();
            $table->string('signature_path')->nullable();

            $table->string('registration_no')->nullable();
            $table->string('tax_no')->nullable();
            $table->unsignedSmallInteger('founded_year')->nullable();

            $table->json('working_hours_json')->nullable();
            $table->json('meta_json')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};

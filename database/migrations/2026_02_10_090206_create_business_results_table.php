<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('business_results', function (Blueprint $table) {
            $table->id();

            $table->string('business_name');
            $table->string('business_location');
            $table->string('campaign_duration');

            // Metrics stored as JSON
            // [
            //   { "label": "Google Rankings", "value": "Top 3" },
            //   { "label": "Monthly Calls", "value": "+250%" }
            // ]
            $table->json('metrics');

            $table->text('quote');

            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_results');
    }
};

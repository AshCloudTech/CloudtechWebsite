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
        Schema::create('case_study_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('case_study_id')->constrained()->cascadeOnDelete();

            $table->string('section', 20); // challenge | solution
            $table->string('icon', 60)->nullable(); // lucide icon for solution; can be null
            $table->string('text', 255);

            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->timestamps();

            $table->index(['case_study_id', 'section']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_study_points');
    }
};

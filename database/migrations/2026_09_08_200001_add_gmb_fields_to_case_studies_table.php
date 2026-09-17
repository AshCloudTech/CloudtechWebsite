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
        Schema::table('case_studies', function (Blueprint $table) {
            if (!Schema::hasColumn('case_studies', 'location')) {
                $table->string('location', 120)->nullable()->after('industry');
            }
            if (!Schema::hasColumn('case_studies', 'duration')) {
                $table->string('duration', 60)->nullable()->after('year');
            }
            if (!Schema::hasColumn('case_studies', 'type')) {
                $table->string('type', 50)->default('gmb')->after('slug');
            }
            if (!Schema::hasColumn('case_studies', 'website')) {
                $table->string('website', 255)->nullable()->after('client_name');
            }

            // Hero section
            if (!Schema::hasColumn('case_studies', 'hero_title_main')) {
                $table->string('hero_title_main', 255)->nullable()->after('hero_image');
            }
            if (!Schema::hasColumn('case_studies', 'hero_title_em')) {
                $table->string('hero_title_em', 255)->nullable()->after('hero_title_main');
            }
            if (!Schema::hasColumn('case_studies', 'hero_lead')) {
                $table->text('hero_lead')->nullable()->after('hero_title_em');
            }
            if (!Schema::hasColumn('case_studies', 'hero_quote')) {
                $table->text('hero_quote')->nullable()->after('hero_lead');
            }

            // Charts labels
            if (!Schema::hasColumn('case_studies', 'chart_trend_label')) {
                $table->string('chart_trend_label', 255)->nullable()->after('hero_quote');
            }
            if (!Schema::hasColumn('case_studies', 'chart_breakdown_label')) {
                $table->string('chart_breakdown_label', 255)->nullable()->after('chart_trend_label');
            }

            // CTA section
            if (!Schema::hasColumn('case_studies', 'cta_title')) {
                $table->string('cta_title', 255)->nullable()->after('testimonial_author_title');
            }
            if (!Schema::hasColumn('case_studies', 'cta_btn_text')) {
                $table->string('cta_btn_text', 120)->nullable()->after('cta_title');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('case_studies', function (Blueprint $table) {
            $columns = [
                'location',
                'duration',
                'type',
                'website',
                'hero_title_main',
                'hero_title_em',
                'hero_lead',
                'hero_quote',
                'chart_trend_label',
                'chart_breakdown_label',
                'cta_title',
                'cta_btn_text',
            ];
            foreach ($columns as $column) {
                if (Schema::hasColumn('case_studies', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};

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
        Schema::table('pricing_plans', function (Blueprint $table) {
            if (!Schema::hasColumn('pricing_plans', 'category')) {
                $table->string('category', 50)->default('usa')->after('key')->index();
            }
            if (!Schema::hasColumn('pricing_plans', 'ideal')) {
                $table->string('ideal', 180)->nullable()->after('subtitle');
            }
            if (!Schema::hasColumn('pricing_plans', 'currency_symbol')) {
                $table->string('currency_symbol', 10)->default('$')->after('ideal');
            }
            if (!Schema::hasColumn('pricing_plans', 'price_amount')) {
                $table->string('price_amount', 40)->nullable()->after('currency_symbol');
            }
            if (!Schema::hasColumn('pricing_plans', 'price_period')) {
                $table->string('price_period', 20)->default('/mo')->after('price_amount');
            }
            if (!Schema::hasColumn('pricing_plans', 'btn_class')) {
                $table->string('btn_class', 100)->nullable()->after('cta_variant');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pricing_plans', function (Blueprint $table) {
            $columns = [
                'category',
                'ideal',
                'currency_symbol',
                'price_amount',
                'price_period',
                'btn_class',
            ];
            foreach ($columns as $column) {
                if (Schema::hasColumn('pricing_plans', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};

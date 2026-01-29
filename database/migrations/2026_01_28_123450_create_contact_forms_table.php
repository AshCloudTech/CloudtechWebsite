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
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();          // about_us, dm_onpage_seo, etc.
            $table->string('title');
            $table->string('source_page')->nullable(); // /about-us or blade identifier

            $table->string('recipient_to')->nullable();
            $table->string('recipient_cc')->nullable();
            $table->string('recipient_bcc')->nullable();

            $table->boolean('user_autoreply_enabled')->default(false);
            $table->string('user_autoreply_subject')->nullable();
            $table->longText('user_autoreply_body')->nullable();

            $table->foreignId('smtp_mailer_id')->nullable()->constrained('smtp_mailers')->nullOnDelete();
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_forms');
    }
};

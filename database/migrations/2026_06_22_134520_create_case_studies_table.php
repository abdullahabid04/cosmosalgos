<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 180);
            $table->string('slug', 220)->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('client', 120);
            // industry_id FK added after industries table exists
            $table->foreignId('industry_id')
                ->nullable()
                ->constrained('industries')
                ->nullOnDelete();
            $table->string('team_size', 40)->nullable();   // e.g. "4 engineers"
            $table->string('duration', 40)->nullable();    // e.g. "6 months"
            $table->string('location', 80)->nullable();    // e.g. "Pakistan"
            $table->boolean('is_active')->default(true);
            $table->unsignedSmallInteger('sort_order')->default(0)->index();
            $table->string('seo_title', 70)->nullable();
            $table->text('seo_description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('career_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title', 180);
            $table->string('department', 100);
            $table->enum('type', ['full-time', 'part-time', 'contract', 'remote'])
                ->default('full-time');
            $table->string('location', 140);          // e.g. "Bahawalpur, Pakistan" or "Remote"
            $table->longText('description');           // rich text
            $table->longText('requirements')->nullable(); // rich text
            $table->boolean('is_active')->default(true);
            $table->timestamp('expires_at')->nullable()->index();
            $table->unsignedSmallInteger('sort_order')->default(0)->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('career_listings');
    }
};

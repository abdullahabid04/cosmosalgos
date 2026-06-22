<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            // rating stored as 1–5 integer; avatar handled by Spatie Media Library (no column needed)
            $table->unsignedTinyInteger('rating')
                ->default(5)
                ->after('quote');
        });
    }

    public function down(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropColumn(['rating']);
        });
    }
};

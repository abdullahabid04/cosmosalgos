<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('client', 120)->nullable()->after('slug');
            $table->unsignedSmallInteger('year')->nullable()->after('client');
            $table->text('excerpt')->nullable()->after('year');

            $table->foreignId('industry_id')
                ->nullable()
                ->after('is_active')
                ->constrained('industries')
                ->nullOnDelete();

            $table->string('seo_title', 70)->nullable()->after('sort_order');
            $table->text('seo_description')->nullable()->after('seo_title');
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['industry_id']);
            $table->dropColumn([
                'client', 'year', 'excerpt',
                'industry_id',
                'seo_title', 'seo_description',
            ]);
        });
    }
};

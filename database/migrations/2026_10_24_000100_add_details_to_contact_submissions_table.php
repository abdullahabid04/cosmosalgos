<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table): void {
            $table->string('company')->nullable()->after('email');
            $table->string('phone', 40)->nullable()->after('company');
            $table->string('service', 60)->nullable()->after('phone');
            $table->string('budget', 40)->nullable()->after('service');
        });
    }

    public function down(): void
    {
        Schema::table('contact_submissions', function (Blueprint $table): void {
            $table->dropColumn(['company', 'phone', 'service', 'budget']);
        });
    }
};

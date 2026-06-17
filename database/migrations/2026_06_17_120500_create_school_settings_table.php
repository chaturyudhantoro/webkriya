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
        Schema::create('school_settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name')->default('WEBKRIYA');
            $table->string('opening_hours')->default('Senin - Jumat, 07:00 - 15:00');
            $table->text('address')->default('Jl. Kriya Modern No. 26 Surakarta, Indonesia');
            $table->text('google_maps_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_settings');
    }
};

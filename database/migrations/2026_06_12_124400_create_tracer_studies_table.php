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
        Schema::create('tracer_studies', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->integer('graduation_year');
            $table->foreignId('major_id')->constrained('majors')->cascadeOnDelete();
            $table->enum('status', ['bekerja', 'kuliah', 'wirausaha', 'mencari_kerja']);
            $table->json('details')->nullable(); // e.g. company, position, university, study_program, or business_name
            $table->string('email')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->text('testimonials')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracer_studies');
    }
};

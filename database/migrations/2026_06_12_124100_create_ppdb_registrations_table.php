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
        Schema::create('ppdb_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number')->unique();
            $table->string('full_name');
            $table->string('nisn', 10)->unique();
            $table->string('email')->unique();
            $table->string('whatsapp_number');
            $table->foreignId('major_priority_1')->constrained('majors')->cascadeOnDelete();
            $table->foreignId('major_priority_2')->constrained('majors')->cascadeOnDelete();
            $table->enum('status', ['draft', 'submitted', 'verified', 'rejected', 'accepted'])->default('draft');
            $table->text('rejection_reason')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdb_registrations');
    }
};

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
        Schema::create('encounters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained()->cascadeOnDelete();
            $table->string('patient_first_name');
            $table->string('patient_last_name')->nullable();
            $table->date('patient_birth_date')->nullable();
            $table->string('patient_gender', 20)->nullable();
            $table->string('patient_email')->nullable();
            $table->string('patient_phone', 20)->nullable();
            $table->dateTime('scheduled_at');
            $table->string('encounter_type', 50)->default('in_person');
            $table->string('status', 50)->default('scheduled');
            $table->integer('duration_minutes')->nullable();
            $table->boolean('requires_follow_up')->default(false);
            $table->dateTime('follow_up_at')->nullable();
            $table->text('reason')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encounters');
    }
};

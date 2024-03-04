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
        Schema::create('lesson_record_student', function (Blueprint $table) {
            $table->uuid()->primary();

            $table->foreignUuid('lesson_record_uuid')->constrained('lesson_records', 'uuid')->cascadeOnDelete();
            $table->foreignUuid('student_uuid')->constrained('students', 'uuid')->cascadeOnDelete();

            $table->unique(['lesson_record_uuid', 'student_uuid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_record_student');
    }
};

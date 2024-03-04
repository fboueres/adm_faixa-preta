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
        Schema::create('lesson_student', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->foreignUuid('lesson_uuid')->constrained('lessons', 'uuid')->cascadeOnDelete();
            $table->foreignUuid('student_uuid')->constrained('students', 'uuid')->cascadeOnDelete();
            
            $table->unique(['lesson_uuid', 'student_uuid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_student');
    }
};

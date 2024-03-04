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
        Schema::create('guardians', function (Blueprint $table) {
            $table->uuid()->primary();

            $table->string('cpf', 11);
            $table->string('full_name');
            $table->string('affiliation');
            
            $table->foreignUuid('student_uuid')->constrained('students', 'uuid')->cascadeOnDelete();

            $table->unique(['uuid', 'student_uuid']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};

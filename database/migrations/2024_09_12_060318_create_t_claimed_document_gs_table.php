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
        Schema::create('t_claimed_document_gs', function (Blueprint $table) {
            $table->integer('ID', true)->index('id');
            $table->integer('STUDENT_APPLICANT')->nullable();
            $table->integer('DOCUMENT_ID')->nullable();
            $table->string('COUNT', 50)->nullable();
            $table->date('DATE_PROCESSED')->nullable();
            $table->string('UPDATED_BY', 100)->nullable();
            $table->text('PURPOSE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_claimed_document_gs');
    }
};

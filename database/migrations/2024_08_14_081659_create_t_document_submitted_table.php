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
        Schema::create('t_document_submitted', function (Blueprint $table) {
            $table->id();
            $table->integer('APPLICANT')->nullable()->index('applicant');
            $table->integer('DOCUMENT_ID')->nullable()->index('document_id');
            $table->string('PATH', 250)->nullable();
            $table->date('DATE_SUBMITTED')->nullable();
            $table->string('PROCESSED_BY', 100)->nullable();
            $table->string('REMARKS', 250)->nullable();
            $table->string('UPDATED_BY', 100)->nullable();
            $table->dateTime('DATE_UPDATED')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_document_submitted');
    }
};

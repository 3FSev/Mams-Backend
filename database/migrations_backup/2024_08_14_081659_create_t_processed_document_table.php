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
        Schema::create('t_processed_document', function (Blueprint $table) {
            $table->id();
            $table->integer('STUDENT')->nullable()->index('student');
            $table->integer('DOCUMENT_ID')->nullable()->index('document_id');
            $table->dateTime('DATE_REQUESTED')->nullable();
            $table->string('STATUS', 50)->nullable()->default('Active');
            $table->string('PROCESSED_BY', 100)->nullable();
            $table->timestamp('DATE_ADDED')->nullable()->useCurrent();
            $table->string('UPDATED_BY', 100)->nullable();
            $table->dateTime('DATE_UPDATED')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_processed_document');
    }
};

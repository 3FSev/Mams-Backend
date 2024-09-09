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
        Schema::create('t_penalty', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SUBJECT')->index('fk_subject_idx2');
            $table->integer('STUDENT')->index('fk_student_idx2');
            $table->string('STATUS', 25)->default('Not Taken');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penalty');
    }
};

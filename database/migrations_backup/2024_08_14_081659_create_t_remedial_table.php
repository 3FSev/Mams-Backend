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
        Schema::create('t_remedial', function (Blueprint $table) {
            $table->id();
            $table->integer('SUBJECT')->index('fk_subject_idx');
            $table->integer('STUDENT')->index('fk_student_idx');
            $table->string('STATUS', 25)->default('Not Taken');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_remedial');
    }
};

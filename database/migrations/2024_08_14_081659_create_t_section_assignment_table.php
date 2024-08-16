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
        Schema::create('t_section_assignment', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SY')->nullable()->index('sy');
            $table->integer('SYSEM')->nullable()->index('sysem');
            $table->integer('STUDENT')->nullable()->index('student');
            $table->integer('GRADE_LVL')->nullable();
            $table->date('DATE_ASSIGNED')->nullable();
            $table->integer('ASSIGNED_BY')->nullable();
            $table->string('PROGRAM_TYPE', 25)->nullable();
            $table->integer('SECTION')->nullable()->index('section');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_section_assignment');
    }
};

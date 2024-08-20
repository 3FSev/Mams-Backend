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
        Schema::create('t_student_enrollment_line_history', function (Blueprint $table) {
            $table->id();
            $table->integer('ENROLLMENT_ID')->nullable();
            $table->integer('SECTION_OFFERING_LINE')->nullable();
            $table->integer('NO_OF_TUITION_HRS')->nullable();
            $table->dateTime('DATE_ENROLLED')->nullable();
            $table->string('STATUS', 25)->nullable()->default('Active');
            $table->integer('OPEN_SECTION_OFFERING')->nullable()->comment('Eto ung sa part ng open subject');
            $table->string('ADJUSTMENT_STATUS', 50)->nullable()->comment('ADD,CHANGE,DELETE');
            $table->integer('FACULTY_ENROLLED')->nullable()->comment('id NG REGISTRAR');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_student_enrollment_line_history');
    }
};

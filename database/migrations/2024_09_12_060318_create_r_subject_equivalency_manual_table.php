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
        Schema::create('r_subject_equivalency_manual', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('STUDENT_ID')->nullable();
            $table->dateTime('DATE_PROCESSED')->nullable();
            $table->integer('CURR_LINE_ID')->nullable();
            $table->string('SUB_CODE', 50)->nullable();
            $table->string('SUB_NAME', 200)->nullable();
            $table->string('SUB_DESC', 9000)->nullable();
            $table->float('SUB_UNITS')->nullable();
            $table->string('SUB_GRADES', 10)->nullable();
            $table->string('STATUS', 25)->nullable()->default('Active');
            $table->string('REMARKS', 9000)->nullable();
            $table->string('SCHOOL', 1000)->nullable();
            $table->string('SY', 25)->nullable();
            $table->string('SEMESTER', 25)->nullable();
            $table->integer('YEAR_LVL')->nullable();
            $table->string('GRADE_STATUS', 50)->nullable();
            $table->integer('SUBJECT_ID')->nullable()->index('subject_id');
            $table->string('UPDATED_BY', 100)->nullable();
            $table->dateTime('DATE_UPDATED')->nullable();
            $table->string('OLD_GRADE', 100)->nullable();
            $table->binary('CROSS_ENROLLED')->nullable()->default('0');
            $table->string('ACADEMIC_TYPE', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_subject_equivalency_manual');
    }
};

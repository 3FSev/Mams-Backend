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
        Schema::create('t_accreditation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->timestamp('DATE_PROCESSED')->useCurrent();
            $table->string('SUB_CODE', 250)->nullable();
            $table->string('SUB_DESC', 250)->nullable();
            $table->float('SUB_UNITS')->nullable();
            $table->string('SUB_GRADES', 50)->nullable();
            $table->string('STATUS', 50)->nullable()->default('Active');
            $table->string('REMARKS', 250)->nullable();
            $table->string('SCHOOL', 250)->nullable();
            $table->unsignedBigInteger('sy_id')->nullable();
            $table->string('SEMESTER', 10)->nullable();
            $table->integer('YEAR_LVL')->nullable();
            $table->integer('USER')->nullable();
            $table->string('ACADEMIC_TYPE', 50)->nullable();
            $table->binary('CROSS_ENROLLED')->nullable()->default('0');

            $table->foreign('student_id')->references('id')->on('t_student');
            $table->foreign('sy_id')->references('code')->on('r_sy');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_accreditation');
    }
};

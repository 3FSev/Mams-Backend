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
        Schema::create('sys_config_max_units', function (Blueprint $table) {
            $table->integer('MAX_UNIT')->nullable();
            $table->decimal('CHARGE_FOR_CHANGE', 11)->nullable();
            $table->decimal('CHARGE_FOR_DELETE', 11)->nullable();
            $table->string('YEAR_LEVELLING', 50)->nullable()->default('Units');
            $table->string('GRADING_SYSTEM_COLGS', 50)->nullable();
            $table->string('FACULTY_TYPE', 50)->nullable();
            $table->string('COREQUISITE', 50)->nullable();
            $table->string('GRADE_TYPE', 50)->nullable();
            $table->string('IS_SEMESTER', 50)->nullable();
            $table->string('IS_INC_PASSED', 50)->nullable();
            $table->string('PAYMENT_DISTRIBUTION', 50)->nullable();
            $table->integer('highest_grade')->nullable();
            $table->integer('lowest_grade')->nullable();
            $table->integer('highest_gradeEA')->nullable();
            $table->integer('lowest_gradeEA')->nullable();
            $table->integer('ONLINEBASIC')->nullable();
            $table->integer('ONLINESHS')->nullable();
            $table->integer('reglowest_gradeEA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_config_max_units');
    }
};

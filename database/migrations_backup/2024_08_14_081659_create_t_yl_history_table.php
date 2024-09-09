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
        Schema::create('t_yl_history', function (Blueprint $table) {
            $table->string('STUDENT_NO', 100)->nullable();
            $table->string('CURRCODE', 100)->nullable();
            $table->integer('CURRENT_UNITS')->nullable();
            $table->integer('NEEDED_UNITS')->nullable();
            $table->integer('ADMISSION_YEAR')->nullable();
            $table->string('COURSE', 100)->nullable();
            $table->integer('OLD_YRLVL')->nullable();
            $table->integer('NEW_YRLVL')->nullable();
            $table->string('OLD_ST_AS', 250)->nullable();
            $table->string('NEW_ST_AS', 250)->nullable();
            $table->string('OLD_CURRCODE', 100)->nullable();
            $table->string('OLD_COURSE', 100)->nullable();
            $table->string('SYSEM', 100)->nullable();
            $table->timestamp('DATE_CREATED')->useCurrent();
            $table->integer('USER')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_yl_history');
    }
};

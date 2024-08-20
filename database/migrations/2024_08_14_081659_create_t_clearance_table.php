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
        Schema::create('t_clearance', function (Blueprint $table) {
            $table->id();
            $table->integer('STUDENT_ID')->nullable()->index('student_id');
            $table->integer('OFFICE')->nullable();
            $table->integer('SCHOOL')->nullable();
            $table->integer('SY_SEM')->nullable();
            $table->text('REMARKS')->nullable();
            $table->string('AMOUNT', 10)->nullable()->default('0.00');
            $table->string('STATUS', 12)->nullable()->default('Not Cleared');
            $table->timestamp('DATE_SUBMITTED')->useCurrent();
            $table->integer('USERID')->nullable();
            $table->string('PROGRAM_TYPE', 50)->nullable()->default('COLLEGE');
            $table->integer('EDITEDBY')->nullable();
            $table->timestamp('DATE_EDITED')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_clearance');
    }
};

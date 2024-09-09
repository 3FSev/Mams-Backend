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
        Schema::create('r_faculty_campus_assignment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('campus_id');
            $table->integer('emp_status');
            $table->unsignedBigInteger('faculty_type_id');
            $table->date('date_assigned');
            $table->string('conflict_override', 5)->nullable()->default('no');
            $table->unsignedBigInteger('college_id')->nullable();
            $table->string('program_type', 25);

            $table->foreign('faculty_id')->references('id')->on('r_user');
            $table->foreign('campus_id')->references('id')->on('r_campus');
            $table->foreign('faculty_type_id')->references('id')->on('r_faculty_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_faculty_campus_assignment');
    }
};

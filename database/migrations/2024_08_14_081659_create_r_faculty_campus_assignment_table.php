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
            $table->integer('ID', true);
            $table->integer('faculty')->index('fk_faculty');
            $table->integer('campus')->index('fk_campus');
            $table->integer('emp_status');
            $table->integer('faculty_type')->index('fk_type');
            $table->date('date_assigned');
            $table->string('conflict_override', 5)->nullable()->default('no');
            $table->integer('department')->nullable()->index('fk_college');
            $table->string('program_type', 25);
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

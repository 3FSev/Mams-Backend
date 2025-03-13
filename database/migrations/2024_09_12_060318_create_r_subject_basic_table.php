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
        Schema::create('r_subject_basic', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CODE', 25)->nullable();
            $table->string('DESCRIPTION', 100)->nullable();
            $table->decimal('UNIT', 11)->nullable();
            $table->integer('GRADE_LVL')->nullable()->comment('IF 11 THEN FOR SHS');
            $table->string('IS_ACADEMIC', 5)->nullable()->default('Yes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_subject_basic');
    }
};

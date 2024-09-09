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
        Schema::create('r_section', function (Blueprint $table) {
            $table->id();
            $table->string('CODE', 25);
            $table->unsignedBigInteger('course_id');
            $table->integer('SLOTS')->nullable()->default(60);

            $table->foreign('course-id')->references('id')->on('r_course');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_section');
    }
};

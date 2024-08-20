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
        Schema::table('r_course', function (Blueprint $table) {
            $table->foreign(['COLLEGE'], 'r_course_ibfk_1')->references(['id'])->on('r_college')->onUpdate('restrict')->onDelete('no action');
            $table->foreign(['DEPARTMENT'], 'r_course_ibfk_2')->references(['id'])->on('r_department')->onUpdate('restrict')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_course', function (Blueprint $table) {
            $table->dropForeign('r_course_ibfk_1');
            $table->dropForeign('r_course_ibfk_2');
        });
    }
};

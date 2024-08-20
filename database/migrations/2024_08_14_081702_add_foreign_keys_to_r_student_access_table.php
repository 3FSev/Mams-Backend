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
        Schema::table('r_student_access', function (Blueprint $table) {
            $table->foreign(['STUDENT_ID'], 'r_student_access_ibfk_1')->references(['id'])->on('t_student')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_student_access', function (Blueprint $table) {
            $table->dropForeign('r_student_access_ibfk_1');
        });
    }
};

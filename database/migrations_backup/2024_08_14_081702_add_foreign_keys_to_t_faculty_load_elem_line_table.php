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
        Schema::table('t_faculty_load_elem_line', function (Blueprint $table) {
            $table->foreign(['FACULTY_LOAD'], 't_faculty_load_elem_line_ibfk_1')->references(['id'])->on('t_faculty_load_elem')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_faculty_load_elem_line', function (Blueprint $table) {
            $table->dropForeign('t_faculty_load_elem_line_ibfk_1');
        });
    }
};

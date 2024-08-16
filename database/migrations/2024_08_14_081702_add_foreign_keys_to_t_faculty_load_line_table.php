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
        Schema::table('t_faculty_load_line', function (Blueprint $table) {
            $table->foreign(['FACULTY_LOAD'], 'fk_faculty_load')->references(['ID'])->on('t_faculty_load')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_faculty_load_line', function (Blueprint $table) {
            $table->dropForeign('fk_faculty_load');
        });
    }
};

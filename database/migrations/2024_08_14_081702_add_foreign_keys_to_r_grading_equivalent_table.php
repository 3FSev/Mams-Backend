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
        Schema::table('r_grading_equivalent', function (Blueprint $table) {
            $table->foreign(['COURSE'], 'r_grading_equivalent_ibfk_1')->references(['ID'])->on('r_course')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_grading_equivalent', function (Blueprint $table) {
            $table->dropForeign('r_grading_equivalent_ibfk_1');
        });
    }
};

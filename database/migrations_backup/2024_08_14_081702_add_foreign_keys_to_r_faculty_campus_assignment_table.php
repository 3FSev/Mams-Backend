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
        Schema::table('r_faculty_campus_assignment', function (Blueprint $table) {
            $table->foreign(['campus'], 'fk_campus')->references(['id'])->on('r_campus')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['department'], 'fk_college')->references(['id'])->on('r_college')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['faculty'], 'fk_faculty')->references(['id'])->on('r_user')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['faculty_type'], 'fk_type')->references(['id'])->on('r_faculty_type')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_faculty_campus_assignment', function (Blueprint $table) {
            $table->dropForeign('fk_campus');
            $table->dropForeign('fk_college');
            $table->dropForeign('fk_faculty');
            $table->dropForeign('fk_type');
        });
    }
};

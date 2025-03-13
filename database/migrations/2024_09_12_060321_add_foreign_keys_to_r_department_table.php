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
        Schema::table('r_department', function (Blueprint $table) {
            $table->foreign(['COLLEGE'], 'r_department_ibfk_1')->references(['ID'])->on('r_college')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_department', function (Blueprint $table) {
            $table->dropForeign('r_department_ibfk_1');
        });
    }
};

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
        Schema::table('t_guidance_deficiency', function (Blueprint $table) {
            $table->foreign(['STUDENT_ID'], 't_guidance_deficiency_ibfk_1')->references(['ID'])->on('t_student')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_guidance_deficiency', function (Blueprint $table) {
            $table->dropForeign('t_guidance_deficiency_ibfk_1');
        });
    }
};

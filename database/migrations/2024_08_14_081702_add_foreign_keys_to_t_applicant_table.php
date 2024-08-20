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
        Schema::table('t_applicant', function (Blueprint $table) {
            $table->foreign(['GUARDIAN'], 't_applicant_ibfk_1')->references(['GUARDIAN_ID'])->on('r_guardian')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['CAMPUS'], 't_applicant_ibfk_2')->references(['id'])->on('r_campus')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['PARENT'], 't_applicant_ibfk_3')->references(['PARENT_ID'])->on('r_parent')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_applicant', function (Blueprint $table) {
            $table->dropForeign('t_applicant_ibfk_1');
            $table->dropForeign('t_applicant_ibfk_2');
            $table->dropForeign('t_applicant_ibfk_3');
        });
    }
};

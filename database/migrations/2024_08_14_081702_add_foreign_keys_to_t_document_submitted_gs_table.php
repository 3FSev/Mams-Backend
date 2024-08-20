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
        Schema::table('t_document_submitted_gs', function (Blueprint $table) {
            $table->foreign(['APPLICANT'], 't_document_submitted_gs_ibfk_1')->references(['id'])->on('t_applicant')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['DOCUMENT_ID'], 't_document_submitted_gs_ibfk_2')->references(['id'])->on('r_document_gs')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_document_submitted_gs', function (Blueprint $table) {
            $table->dropForeign('t_document_submitted_gs_ibfk_1');
            $table->dropForeign('t_document_submitted_gs_ibfk_2');
        });
    }
};

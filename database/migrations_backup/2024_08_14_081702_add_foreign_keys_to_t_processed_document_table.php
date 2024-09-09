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
        Schema::table('t_processed_document', function (Blueprint $table) {
            $table->foreign(['STUDENT'], 't_processed_document_ibfk_1')->references(['id'])->on('t_student')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['DOCUMENT_ID'], 't_processed_document_ibfk_2')->references(['id'])->on('r_document')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_processed_document', function (Blueprint $table) {
            $table->dropForeign('t_processed_document_ibfk_1');
            $table->dropForeign('t_processed_document_ibfk_2');
        });
    }
};

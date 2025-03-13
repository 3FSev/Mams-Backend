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
        Schema::table('m_evaluation_line', function (Blueprint $table) {
            $table->foreign(['evaluationid'], 'm_evaluation_line_ibfk_1')->references(['id'])->on('m_evaluation')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('m_evaluation_line', function (Blueprint $table) {
            $table->dropForeign('m_evaluation_line_ibfk_1');
        });
    }
};

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
        Schema::table('r_signatories', function (Blueprint $table) {
            $table->foreign(['REPORT'], 'r_signatories_ibfk_1')->references(['ID'])->on('r_report')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['PREPARED_BY'], 'r_signatories_ibfk_2')->references(['ID'])->on('r_user')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['CHECKED_BY'], 'r_signatories_ibfk_3')->references(['ID'])->on('r_user')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['OFFICE_HEAD'], 'r_signatories_ibfk_4')->references(['ID'])->on('r_user')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_signatories', function (Blueprint $table) {
            $table->dropForeign('r_signatories_ibfk_1');
            $table->dropForeign('r_signatories_ibfk_2');
            $table->dropForeign('r_signatories_ibfk_3');
            $table->dropForeign('r_signatories_ibfk_4');
        });
    }
};

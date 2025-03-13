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
        Schema::table('t_remedial', function (Blueprint $table) {
            $table->foreign(['STUDENT'], 'fk_student')->references(['ID'])->on('t_student')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['SUBJECT'], 'fk_subject')->references(['ID'])->on('r_subject')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_remedial', function (Blueprint $table) {
            $table->dropForeign('fk_student');
            $table->dropForeign('fk_subject');
        });
    }
};

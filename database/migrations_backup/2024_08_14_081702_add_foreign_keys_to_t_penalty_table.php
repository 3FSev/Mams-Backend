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
        Schema::table('t_penalty', function (Blueprint $table) {
            $table->foreign(['STUDENT'], 'fk_student2')->references(['id'])->on('t_student')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['SUBJECT'], 'fk_subject2')->references(['id'])->on('r_subject')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_penalty', function (Blueprint $table) {
            $table->dropForeign('fk_student2');
            $table->dropForeign('fk_subject2');
        });
    }
};

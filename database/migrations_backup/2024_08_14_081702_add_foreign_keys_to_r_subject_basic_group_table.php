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
        Schema::table('r_subject_basic_group', function (Blueprint $table) {
            $table->foreign(['GROUP'], 'fk_group')->references(['id'])->on('r_subject_basic')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['SUB'], 'fk_sub')->references(['id'])->on('r_subject_basic')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_subject_basic_group', function (Blueprint $table) {
            $table->dropForeign('fk_group');
            $table->dropForeign('fk_sub');
        });
    }
};

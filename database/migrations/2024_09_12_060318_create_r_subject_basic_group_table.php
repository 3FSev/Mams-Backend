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
        Schema::create('r_subject_basic_group', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('GROUP')->index('fk_group_idx');
            $table->integer('SUB')->index('fk_sub_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_subject_basic_group');
    }
};

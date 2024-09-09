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
        Schema::create('r_ept_subject', function (Blueprint $table) {
            $table->id();
            $table->integer('EQUIV_SUBJECT')->nullable()->index('equiv_subject');
            $table->integer('REPLACEMENT_FOR')->nullable()->index('replacement_for');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_ept_subject');
    }
};

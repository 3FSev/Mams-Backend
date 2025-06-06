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
        Schema::create('t_section_offering_shs_subject', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SECTION_OFFERING')->nullable()->index('section_offering');
            $table->integer('SUBJECT')->nullable()->index('subject');
            $table->integer('SLOTS')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_section_offering_shs_subject');
    }
};

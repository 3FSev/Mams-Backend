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
        Schema::create('t_section_offering_elem_subject', function (Blueprint $table) {
            $table->id();
            $table->integer('SECTION_OFFERING_ID')->nullable()->index('section_offering_id');
            $table->integer('SUBJECT')->nullable()->index('subject');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_section_offering_elem_subject');
    }
};

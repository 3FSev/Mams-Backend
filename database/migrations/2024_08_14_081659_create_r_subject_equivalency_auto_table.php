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
        Schema::create('r_subject_equivalency_auto', function (Blueprint $table) {
            $table->id();
            $table->integer('SUBJECT')->nullable()->comment('subject_id');
            $table->integer('SUBJECT_EQUIV')->nullable()->comment('subject_id');
            $table->string('STATUS', 25)->nullable()->default('Active');
            $table->string('EXCEPT_COURSE', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_subject_equivalency_auto');
    }
};

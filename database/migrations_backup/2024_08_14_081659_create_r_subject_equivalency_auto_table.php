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
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->unsignedBigInteger('subject_equiv_id')->nullable();
            $table->string('STATUS', 25)->nullable()->default('Active');
            $table->string('EXCEPT_COURSE', 100)->nullable();

            $table->foreign('subject_id')->references('id')->on('r_subject');
            $table->foreign('subject_equiv_id')->references('id')->on('r_subject');
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

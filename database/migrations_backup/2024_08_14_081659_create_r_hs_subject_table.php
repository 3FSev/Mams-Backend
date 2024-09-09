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
        Schema::create('r_hs_subject', function (Blueprint $table) {
            $table->id();
            $table->string('SUBJECT', 100)->nullable();
            $table->decimal('PASSING_GRADE', 10, 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_hs_subject');
    }
};

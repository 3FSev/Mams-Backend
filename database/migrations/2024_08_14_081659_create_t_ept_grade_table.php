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
        Schema::create('t_ept_grade', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('APPLICANTID')->nullable()->index('applicantid');
            $table->decimal('GRADE', 10, 3)->nullable();
            $table->string('RESULT', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_ept_grade');
    }
};

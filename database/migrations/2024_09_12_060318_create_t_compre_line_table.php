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
        Schema::create('t_compre_line', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('COMPRE')->index('fk_compre_cl');
            $table->integer('SUBJECT')->index('fk_subject_cl');
            $table->decimal('GRADE', 10);
            $table->string('REMARKS', 25);
            $table->integer('FACULTY')->index('fk_faculty_cl');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_compre_line');
    }
};

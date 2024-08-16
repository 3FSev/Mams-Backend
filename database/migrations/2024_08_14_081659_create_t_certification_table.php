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
        Schema::create('t_certification', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('STUDENT_NO', 100)->nullable();
            $table->string('NAME', 250)->nullable();
            $table->string('ADDRESS', 250)->nullable();
            $table->date('DATEISSUE')->nullable();
            $table->date('DATEFROM')->nullable();
            $table->date('DATETO')->nullable();
            $table->timestamp('DATEREQ')->useCurrent();
            $table->string('ADDED_BY', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_certification');
    }
};

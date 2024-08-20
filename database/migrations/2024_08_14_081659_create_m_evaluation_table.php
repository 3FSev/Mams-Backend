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
        Schema::create('m_evaluation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sos_id');
            $table->unsignedBigInteger('f_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('sysem')->nullable();
            $table->timestamp('date_taken')->useCurrent();
            $table->text('comment')->nullable();
            
            $table->foreign('sos_id')->references('id')->on('t_section_offering_subject');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_evaluation');
    }
};

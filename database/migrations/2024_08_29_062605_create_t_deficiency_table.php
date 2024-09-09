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
        Schema::create('t_deficiency', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('STUDENT_ID')->nullable()->index('student_id');
            $table->text('DEFICIENCY')->nullable();
            $table->string('REGISTRATION', 10)->nullable();
            $table->string('GRADES', 10)->nullable();
            $table->string('CURRICULUM', 10)->nullable();
            $table->timestamp('DATE_SUBMITTED')->useCurrent();
            $table->integer('USERID')->nullable();
            $table->string('STATUS', 10)->nullable()->default('Active');
            $table->integer('EDITED_BY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_deficiency');
    }
};

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
        Schema::create('r_student_access', function (Blueprint $table) {
            $table->integer('student_id');
            $table->string('student_number', 100);
            $table->string('password', 100);
            $table->string('val', 100);
            $table->decimal('generated_by', 10, 0)->nullable();
            $table->timestamp('date_generated')->nullable()->useCurrent();
            $table->string('default_pass', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_student_access');
    }
};

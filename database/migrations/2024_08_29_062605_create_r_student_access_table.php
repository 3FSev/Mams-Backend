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
            $table->integer('STUDENT_ID')->index('student_id');
            $table->string('STUDENT_NUMBER', 100);
            $table->string('PASSWORD', 100);
            $table->string('VAL', 100);
            $table->decimal('GENERATED_BY', 10, 0)->nullable();
            $table->dateTime('DATE_GENERATED')->nullable()->useCurrent();
            $table->string('DEFAULT_PASS', 100)->nullable();
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

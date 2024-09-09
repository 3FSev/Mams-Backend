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
        Schema::create('t_section_offering_subject', function (Blueprint $table) {
            $table->id();
            $table->integer('SECTION_OFFERING_ID')->index('section_offering_id');
            $table->integer('SUBJECT')->index('subject');
            $table->integer('SLOTS')->nullable();
            $table->string('SECTION_CODE', 25)->nullable();
            $table->string('IS_OPEN', 25)->nullable()->comment('// IRREGULAR NG KAHIT ANONG COURSE');
            $table->string('IS_OPEN_COURSE', 25)->nullable()->comment('// KAHIT REGULAR NANG LAHAT NA COURSE');
            $table->string('IS_TUTORIAL', 5)->nullable();
            $table->string('IS_PETITION', 5)->nullable();
            $table->timestamp('TIMESTAMP')->useCurrent();
            $table->integer('ENCODED_BY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_section_offering_subject');
    }
};

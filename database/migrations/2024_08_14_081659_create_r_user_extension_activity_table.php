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
        Schema::create('r_user_extension_activity', function (Blueprint $table) {
            $table->id();
            $table->integer('USER_PROFILE');
            $table->string('TYPE', 25);
            $table->string('TITLE', 100)->nullable();
            $table->string('CLASSIFICATION', 50)->nullable();
            $table->string('SUB_CLASS', 50)->nullable();
            $table->string('FUNDING_SOURCE', 50)->nullable();
            $table->decimal('FUNDIND_AMOUNT', 10)->nullable();
            $table->date('DATE')->nullable();
            $table->string('INVOLVEMENT_NATURE', 50)->nullable();
            $table->integer('NO_TRAINED')->nullable();
            $table->integer('NO_HOURS')->nullable();
            $table->integer('TRAINEE_HOURS')->nullable();
            $table->string('RECOGNITION_TITLE', 100)->nullable();
            $table->string('RECOGNITION_AGENCY', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_extension_activity');
    }
};

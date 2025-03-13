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
        Schema::create('r_user_faculty_research', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('USER_PROFILE');
            $table->string('TITLE', 100)->nullable();
            $table->string('FUNDING_AGENCY', 50)->nullable();
            $table->integer('PERCENT_COMPLETION')->nullable();
            $table->string('AWARDS', 150)->nullable();
            $table->string('PUBLISHED_IN', 50)->nullable();
            $table->string('PUBLISHED_IN_REFEREED', 50)->nullable();
            $table->string('PRESENTED_IN', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_faculty_research');
    }
};

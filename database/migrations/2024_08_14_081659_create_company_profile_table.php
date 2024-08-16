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
        Schema::create('company_profile', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('COMPANY_NAME', 250)->nullable();
            $table->string('COMPANY_LOGO', 250)->nullable();
            $table->text('COMPANY_ADDRESS')->nullable();
            $table->string('COMPANY_PHONE', 100)->nullable();
            $table->string('STATUS', 25)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profile');
    }
};

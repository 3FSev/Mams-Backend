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
        Schema::create('r_account', function (Blueprint $table) {
            $table->integer('userid')->nullable()->index('userid');
            $table->string('username', 50)->nullable();
            $table->string('password', 50)->nullable();
            $table->string('status', 10)->nullable()->default('Active');
            $table->timestamp('date_registered')->useCurrent();
            $table->string('usertype', 20)->nullable();
            $table->string('default_pass', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_account');
    }
};

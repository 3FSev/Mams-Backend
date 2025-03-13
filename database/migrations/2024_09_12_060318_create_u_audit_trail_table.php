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
        Schema::create('u_audit_trail', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->text('DESCRIPTION');
            $table->integer('USER_ID');
            $table->string('USER_TYPE', 25);
            $table->dateTime('DATETIME_LOG');
            $table->string('IP_ADDRESS', 25);
            $table->text('EXECUTION_TIME')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('u_audit_trail');
    }
};

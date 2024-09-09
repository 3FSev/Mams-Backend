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
        Schema::create('t_credentialapp_line', function (Blueprint $table) {
            $table->id();
            $table->string('REQUESTID', 100)->nullable();
            $table->string('REQUEST', 10)->nullable();
            $table->string('SEM', 100)->nullable();
            $table->string('SY', 100)->nullable();
            $table->string('TAG', 10)->nullable();
            $table->string('ACCTNGCOMMENT', 100)->nullable();
            $table->double('AMOUNT')->nullable();
            $table->string('PAIDTAG', 100)->nullable();
            $table->string('ORNUMBER', 100)->nullable();
            $table->date('DATEPAIDTAG')->nullable();
            $table->string('ACCTCLEARANCE', 250)->nullable();
            $table->date('CLAIMDATE')->nullable();
            $table->text('CLAIMDETAILS')->nullable();
            $table->string('CLAIMED', 250)->nullable();
            $table->date('RELEASEDATE')->nullable();
            $table->string('VOID_BY', 100)->nullable();
            $table->date('DOD')->nullable();
            $table->string('NOCOPIES', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_credentialapp_line');
    }
};

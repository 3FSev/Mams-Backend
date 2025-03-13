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
        Schema::create('t_credentialapp', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('STUDENT_ID', 100);
            $table->string('MOTHERSMAIDEN', 250)->nullable();
            $table->string('ADDRESS', 250);
            $table->string('CONTACT', 100);
            $table->string('PROGRAM_TYPE', 100)->nullable();
            $table->string('DEGREE', 250);
            $table->string('YEARGRAD', 100)->nullable();
            $table->string('PURPOSES', 250);
            $table->dateTime('DATEAPPLIED')->nullable();
            $table->double('TOTALFEE')->nullable();
            $table->string('PAYMENTTAG', 100)->nullable();
            $table->string('LEDGERREF', 100)->nullable();
            $table->dateTime('DATERECEIVEDREG')->nullable();
            $table->dateTime('DATECASHIERTAG')->nullable();
            $table->string('REGVERIFYUSER', 100)->nullable();
            $table->string('REGVERIFYTAG', 10)->nullable();
            $table->string('REGCOMMENT', 250)->nullable();
            $table->string('REGDEF', 250)->nullable();
            $table->dateTime('REFVERIFYDATE')->nullable();
            $table->string('CLAIMDETAILS', 250)->nullable();
            $table->string('CLAIMED', 10)->nullable();
            $table->string('CATEGORYREQUEST', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_credentialapp');
    }
};

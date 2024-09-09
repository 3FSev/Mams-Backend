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
        Schema::create('c_printaa', function (Blueprint $table) {
            $table->string('idNo', 250);
            $table->string('sysem', 250);
            $table->integer('gradingPeriod');
            $table->boolean('isAccount')->nullable();
            $table->boolean('isAdmision')->nullable();
            $table->dateTime('PrintAct')->nullable();
            $table->dateTime('PrintAdmsn');
            $table->string('FinalClearance', 250)->nullable();
            $table->string('AdmissionCode', 10)->nullable();
            $table->dateTime('DateGenerated')->nullable();

            $table->primary(['idNo', 'sysem', 'gradingPeriod', 'PrintAdmsn']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_printaa');
    }
};

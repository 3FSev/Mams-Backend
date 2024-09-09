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
        Schema::create('r_parent', function (Blueprint $table) {
            $table->id();
            $table->string('F_FNAME', 50)->nullable();
            $table->string('F_MNAME', 50)->nullable();
            $table->string('F_LNAME', 50)->nullable();
            $table->string('M_FNAME', 50);
            $table->string('M_MNAME', 50)->nullable();
            $table->string('M_LNAME', 50);
            $table->string('ADDRESS', 250)->nullable();
            $table->string('PROVINCE', 100)->nullable();
            $table->string('MUNICIPALITY', 100);
            $table->string('ZIPCODE', 10)->nullable();
            $table->string('PHONE', 15)->nullable();
            $table->string('S_NO', 250)->nullable();
            $table->integer('F_AGE')->nullable();
            $table->string('F_LIVING_STATUS', 100)->nullable();
            $table->string('F_OCCUPATION', 250)->nullable();
            $table->string('F_COMPANY', 250)->nullable();
            $table->integer('M_AGE')->nullable();
            $table->string('M_LIVING_STATUS', 100)->nullable();
            $table->string('M_OCCUPATION', 250)->nullable();
            $table->string('M_COMPANY', 250)->nullable();
            $table->string('P_MARITAL_STATUS', 250)->nullable();
            $table->integer('NO_CHILD')->nullable();
            $table->integer('NO_SIS')->nullable();
            $table->integer('NO_BRO')->nullable();
            $table->string('F_EDUC', 250)->nullable();
            $table->string('M_EDUC', 250)->nullable();
            $table->string('UPDATED_BY', 100)->nullable();
            $table->date('DATE_UPDATED')->nullable();
            $table->string('F_PHONE', 50)->nullable();
            $table->string('OFW_M', 5)->nullable();
            $table->string('Country_M', 45)->nullable();
            $table->string('OFW_F', 5)->nullable();
            $table->string('Country_F', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_parent');
    }
};

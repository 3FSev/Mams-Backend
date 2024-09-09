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
        Schema::create('t_applicant_family_background', function (Blueprint $table) {
            $table->id();
            $table->integer('app_id')->nullable();
            $table->string('f_fname', 50)->nullable();
            $table->string('f_mname', 50)->nullable();
            $table->string('f_lname', 50)->nullable();
            $table->string('f_still_alive', 25)->nullable();
            $table->string('f_home_address', 1000)->nullable();
            $table->string('f_tel_no', 25)->nullable();
            $table->string('f_mobile_no', 25)->nullable();
            $table->string('f_email', 100)->nullable();
            $table->string('f_highest_educ_attainment', 500)->nullable();
            $table->string('f_occupation', 500)->nullable();
            $table->string('f_employer_name', 100)->nullable();
            $table->string('f_employer_address', 1000)->nullable();
            $table->string('f_employer_tel', 25)->nullable();
            $table->string('m_fname', 50)->nullable();
            $table->string('m_mname', 50)->nullable();
            $table->string('m_lname', 50)->nullable();
            $table->string('m_mfname', 50)->nullable();
            $table->string('m_mmname', 50)->nullable();
            $table->string('m_mlname', 50)->nullable();
            $table->string('m_still_alive', 25)->nullable();
            $table->string('m_home_address', 500)->nullable();
            $table->string('m_tel_no', 25)->nullable();
            $table->string('m_mobile_no', 25)->nullable();
            $table->string('m_email', 100)->nullable();
            $table->string('m_highest_educ_attainment', 500)->nullable();
            $table->string('m_occupation', 100)->nullable();
            $table->string('m_employer_name', 100)->nullable();
            $table->string('m_employer_address', 500)->nullable();
            $table->string('m_employer_tel', 25)->nullable();
            $table->decimal('gross_monthly_family_income', 18)->nullable();
            $table->integer('no_of_brothers')->nullable();
            $table->integer('no_of_sisters')->nullable();
            $table->integer('no_of_brothers_w_income')->nullable();
            $table->integer('no_of_sisters_w_income')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_applicant_family_background');
    }
};

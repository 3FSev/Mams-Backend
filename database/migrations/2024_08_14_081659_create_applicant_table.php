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
        Schema::create('applicant', function (Blueprint $table) {
            $table->id();
            $table->string('student_no', 250)->nullable();
            $table->integer('username')->nullable();
            $table->string('val', 50)->nullable();
            $table->string('fname', 100);
            $table->string('mname', 100)->nullable();
            $table->string('lname', 100);
            $table->string('contact_num', 25)->nullable();
            $table->string('program_type', 50)->nullable();
            $table->date('dob')->nullable();
            $table->dateTime('DATEAPPLIED')->nullable();
            $table->string('placeofbirth', 100)->nullable();
            $table->string('password', 50);
            $table->string('gender', 10)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('civilstatus', 100)->nullable();
            $table->string('nationality', 100)->nullable();
            $table->string('resident_region', 100)->nullable();
            $table->string('resident_province', 100)->nullable();
            $table->string('resident_municipality', 100)->nullable();
            $table->string('resident_address', 100)->nullable();
            $table->string('resident_zipcode', 10)->nullable();
            $table->string('permanent_region', 100)->nullable();
            $table->string('permanent_province', 100)->nullable();
            $table->string('permanent_municipality', 100)->nullable();
            $table->string('permanent_address', 100)->nullable();
            $table->string('permanent_zipcode', 10)->nullable();
            $table->string('religion', 100)->nullable();
            $table->integer('first_choice')->nullable();
            $table->integer('second_choice')->nullable();
            $table->integer('third_choice')->nullable();
            $table->string('application_type', 100)->nullable();
            $table->string('hs_school', 100)->nullable();
            $table->string('hs_gradyr', 10)->nullable();
            $table->string('hs_address', 100)->nullable();
            $table->string('hsgwa', 10)->nullable();
            $table->string('elem_school', 100)->nullable();
            $table->string('elem_address', 100)->nullable();
            $table->string('elem_gradyr', 10)->nullable();
            $table->string('shs_school', 100)->nullable();
            $table->string('shs_address', 100)->nullable();
            $table->string('shsgwa', 10)->nullable();
            $table->string('shs_gradyr', 10)->nullable();
            $table->integer('track')->nullable();
            $table->integer('strand')->nullable();
            $table->string('f_fname', 100)->nullable();
            $table->string('f_mname', 100)->nullable();
            $table->string('f_lname', 100)->nullable();
            $table->string('m_fname', 100)->nullable();
            $table->string('m_mname', 100)->nullable();
            $table->string('m_lname', 100)->nullable();
            $table->string('m_contact_num', 25)->nullable();
            $table->string('m_province', 100)->nullable();
            $table->string('m_municipality', 100)->nullable();
            $table->string('m_address', 100)->nullable();
            $table->string('m_zipcode', 10)->nullable();
            $table->string('g_fname', 100)->nullable();
            $table->string('g_mname', 100)->nullable();
            $table->string('g_lname', 100)->nullable();
            $table->string('g_contact_num', 25)->nullable();
            $table->string('g_relationship', 100)->nullable();
            $table->string('g_province', 100)->nullable();
            $table->string('g_municipality', 100)->nullable();
            $table->string('g_address', 100)->nullable();
            $table->string('g_zipcode', 10)->nullable();
            $table->string('PROFILEPIC', 100)->nullable()->default('noprofilepic.png');
            $table->string('lastschool', 150)->nullable();
            $table->string('FRONTCARDPIC', 100)->nullable();
            $table->string('BACKCARDPIC', 100)->nullable();
            $table->string('BCPIC', 100)->nullable();
            $table->string('GOODMORALPIC', 100)->nullable();
            $table->string('TRANSFERPIC', 100)->nullable();
            $table->string('MARRIEDPIC', 100)->nullable();
            $table->integer('GRADE_LVL')->nullable();
            $table->integer('CAMPUS')->nullable();
            $table->string('COL_SCHOOL', 100)->nullable();
            $table->string('COL_YEAR', 10)->nullable();
            $table->string('COL_COURSE', 100)->nullable();
            $table->string('COL_ADDRESS', 100)->nullable();
            $table->boolean('DEACTIVATE')->nullable()->default(false);
            $table->integer('SY')->nullable();
            $table->integer('SYSEM')->nullable();
            $table->integer('F_AGE')->nullable();
            $table->string('F_LIVINGSTATUS', 15)->nullable();
            $table->string('F_PHONE', 25)->nullable();
            $table->string('F_EDUC', 100)->nullable();
            $table->string('F_OCCUPATION', 100)->nullable();
            $table->string('F_COMPANY', 100)->nullable();
            $table->integer('M_AGE')->nullable();
            $table->string('M_LIVINGSTATUS', 25)->nullable();
            $table->string('M_EDUC', 100)->nullable();
            $table->string('M_OCCUPATION', 100)->nullable();
            $table->string('M_COMPANY', 100)->nullable();
            $table->string('P_MARITAL', 100)->nullable();
            $table->integer('NUM_CHILDREN')->nullable();
            $table->integer('NUM_BRO')->nullable();
            $table->integer('NUM_SIS')->nullable();
            $table->string('IPGroup', 5)->nullable();
            $table->string('WhatGroup', 100)->nullable();
            $table->string('ModeTransport', 100)->nullable();
            $table->string('Residence', 100)->nullable();
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
        Schema::dropIfExists('applicant');
    }
};

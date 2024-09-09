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
        Schema::create('tblpersonaldata', function (Blueprint $table) {
            $table->string('StudNo', 15)->index('studno');
            $table->string('LName', 30);
            $table->string('FName', 40);
            $table->string('MName', 30);
            $table->string('NName', 20)->nullable();
            $table->string('CY', 4)->default('')->index('cy');
            $table->string('TY', 8)->index('ty');
            $table->string('Mobile', 15)->nullable();
            $table->string('Email', 100)->nullable();
            $table->string('CityAddr', 80)->nullable();
            $table->string('CityRegion', 15)->nullable();
            $table->integer('CityProvince')->nullable();
            $table->integer('CityMunicipality')->nullable();
            $table->string('CityTelNo', 25)->nullable();
            $table->string('CityZip', 10)->nullable();
            $table->string('ProvAddr', 80)->nullable();
            $table->string('ProvRegion', 15)->nullable();
            $table->integer('ProvProvince')->nullable();
            $table->integer('ProvMunicipality')->nullable();
            $table->string('ProvTelNo', 25)->nullable();
            $table->string('ProvZip', 10)->nullable();
            $table->date('BDate')->nullable();
            $table->string('BPlace', 80)->nullable();
            $table->smallInteger('Age')->nullable();
            $table->char('Gender', 1)->nullable()->index('gender');
            $table->string('CID', 10)->nullable();
            $table->string('RID', 15)->nullable();
            $table->string('OtherCitizenship', 25)->nullable();
            $table->smallInteger('Status')->nullable()->index('status');
            $table->string('ACRNO', 25);
            $table->date('ACRDATE');
            $table->string('ICardNo', 50)->nullable();
            $table->string('VisaStatus', 200)->nullable();
            $table->string('VisaType')->nullable();
            $table->date('AuthorizedStayDate')->nullable();
            $table->date('AuthorizedStayDateTo')->nullable();
            $table->string('PassportNo', 20)->nullable();
            $table->date('DateIssued')->nullable();
            $table->string('PlaceIssued', 100)->nullable();
            $table->string('OriginCountry', 20)->nullable();
            $table->string('RemarksPassport')->nullable();
            $table->string('Height', 10)->nullable();
            $table->string('Weight', 15)->nullable();
            $table->char('BloodType', 2)->nullable();
            $table->date('DateApplied')->nullable();
            $table->char('AppStat', 1)->default('P')->fulltext('appstat');
            $table->date('StatDate')->nullable();
            $table->string('course1');
            $table->string('course2', 10)->nullable();
            $table->string('course3', 10)->nullable();
            $table->char('CourseType', 1)->nullable();
            $table->char('ApplicationType', 1)->nullable();
            $table->string('FCourseCode', 10)->nullable()->index('fcoursecode');
            $table->string('CourseCode', 15)->nullable()->index('coursecode');
            $table->string('SectCode', 15)->index('sectcode');
            $table->char('YearLevel', 1)->default('0')->index('yearlevel');
            $table->char('StudentType', 1)->index('studenttype');
            $table->char('StudentStatus', 1)->index('studentstatus');
            $table->char('AdmissionStatus', 1)->nullable();
            $table->string('EducationLevel', 1)->nullable();
            $table->char('NSTP', 1)->nullable();
            $table->unsignedInteger('ForeignExempt');
            $table->date('DateEntered')->nullable();
            $table->date('DateGraduated')->nullable();
            $table->date('DateCreated')->nullable();
            $table->string('CreatedBy', 15)->nullable();
            $table->date('DateEdited')->nullable();
            $table->string('EditedBy', 15)->nullable();
            $table->dateTime('InterviewDate')->nullable();
            $table->string('ApplicantNo', 30)->nullable();
            $table->string('DateEnrolled', 50)->nullable()->default('');
            $table->string('DateGraduation', 50)->nullable()->default('');
            $table->timestamp('timestamp')->nullable()->useCurrent();

            $table->primary(['StudNo', 'LName', 'FName', 'MName']);
            $table->unique(['StudNo'], 'studno_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblpersonaldata');
    }
};

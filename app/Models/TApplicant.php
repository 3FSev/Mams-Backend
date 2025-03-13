<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TApplicant
 * 
 * @property int $ID
 * @property Carbon|null $DATEAPPLIED
 * @property string|null $FNAME
 * @property string|null $MNAME
 * @property string|null $LNAME
 * @property Carbon|null $DOB
 * @property string|null $PLACEOFBIRTH
 * @property string|null $GENDER
 * @property string|null $CIVILSTATUS
 * @property string|null $NATIONALITY
 * @property string|null $RESIDENT_REGION
 * @property string|null $RESIDENT_PROVINCE
 * @property string|null $RESIDENT_MUNICIPALITY
 * @property string|null $RESIDENT_ADDRESS
 * @property string|null $RESIDENT_ZIPCODE
 * @property string|null $PERMANENT_REGION
 * @property string|null $PERMANENT_PROVINCE
 * @property string|null $PERMANENT_MUNICIPALITY
 * @property string|null $PERMANENT_ADDRESS
 * @property string|null $PERMANENT_ZIPCODE
 * @property string|null $CONTACT_NUM
 * @property string|null $HEIGHT
 * @property string|null $WEIGHT
 * @property string|null $EMAIL
 * @property string|null $RELIGION
 * @property string|null $BLOOD_TYPE
 * @property string|null $SPECIAL_SKILL
 * @property string|null $AILMENT
 * @property string|null $DISABILITY
 * @property int|null $FIRST_CHOICE
 * @property int|null $SECOND_CHOICE
 * @property int|null $THIRD_CHOICE
 * @property string|null $APPLICATION_TYPE
 * @property string|null $HS_SCHOOL
 * @property string|null $HS_GRADYR
 * @property string|null $HS_ADDRESS
 * @property string|null $HSGWA
 * @property string|null $STATUS
 * @property string|null $COL_SCHOOL
 * @property string|null $COL_ADDRESS
 * @property string|null $COL_YEAR
 * @property string|null $COL_COURSE
 * @property string|null $PROFILEPIC
 * @property int|null $FINAL_COURSE
 * @property string|null $SUFFIX
 * @property string|null $PASSPORT
 * @property string|null $COUNTRY_OF_ORIGIN
 * @property Carbon|null $DATE_ISSUED
 * @property string|null $PLACE_ISSUED
 * @property int|null $GUARDIAN
 * @property string|null $STUD_PROGRAM_TYPE
 * @property int|null $TRACK
 * @property int|null $STRAND
 * @property int|null $GRADE_LVL
 * @property int|null $CAMPUS
 * @property int|null $GS_COURSE
 * @property int|null $GS_CAMPUS
 * @property Carbon $TIMESTAMP
 * @property string|null $ELEM_SCHOOL
 * @property string|null $ELEM_GRADYR
 * @property string|null $ELEM_ADDRESS
 * @property string|null $PRIMARY_SCHOOL
 * @property string|null $PRIMARY_GRADYR
 * @property string|null $PRIMARY_ADDRESS
 * @property string|null $entrance_credentials
 * @property string|null $SHS_SCHOOL
 * @property string|null $SHS_ADDRESS
 * @property string|null $SHSGWA
 * @property string|null $SHS_GRADYR
 * @property string|null $LASTSCHOOL
 * @property int|null $PARENT
 * @property string|null $MS_SCHOOL
 * @property string|null $MS_GRADYR
 * @property string|null $COL_GRADYR
 * @property int|null $ONLINE_ID
 * @property string|null $SIGNPIC
 * @property string|null $IPGroup
 * @property string|null $WhatGroup
 * @property string|null $ModeTransport
 * @property string|null $Residence
 * 
 * @property RGuardian|null $r_guardian
 * @property RCampus|null $r_campus
 * @property RParent|null $r_parent
 * @property Collection|RMedical[] $r_medicals
 * @property Collection|TDocumentSubmittedBasic[] $t_document_submitted_basics
 * @property Collection|TDocumentSubmittedG[] $t_document_submitted_gs
 * @property Collection|TEptGrade[] $t_ept_grades
 * @property Collection|TGmat[] $t_gmats
 * @property Collection|THsGrade[] $t_hs_grades
 * @property Collection|TInterview[] $t_interviews
 * @property Collection|TInterviewBasic[] $t_interview_basics
 * @property Collection|TInterviewG[] $t_interview_gs
 *
 * @package App\Models
 */
class TApplicant extends Model
{
	protected $table = 't_applicant';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'DATEAPPLIED' => 'datetime',
		'DOB' => 'datetime',
		'FIRST_CHOICE' => 'int',
		'SECOND_CHOICE' => 'int',
		'THIRD_CHOICE' => 'int',
		'FINAL_COURSE' => 'int',
		'DATE_ISSUED' => 'datetime',
		'GUARDIAN' => 'int',
		'TRACK' => 'int',
		'STRAND' => 'int',
		'GRADE_LVL' => 'int',
		'CAMPUS' => 'int',
		'GS_COURSE' => 'int',
		'GS_CAMPUS' => 'int',
		'TIMESTAMP' => 'datetime',
		'PARENT' => 'int',
		'ONLINE_ID' => 'int'
	];

	protected $fillable = [
		'DATEAPPLIED',
		'FNAME',
		'MNAME',
		'LNAME',
		'DOB',
		'PLACEOFBIRTH',
		'GENDER',
		'CIVILSTATUS',
		'NATIONALITY',
		'RESIDENT_REGION',
		'RESIDENT_PROVINCE',
		'RESIDENT_MUNICIPALITY',
		'RESIDENT_ADDRESS',
		'RESIDENT_ZIPCODE',
		'PERMANENT_REGION',
		'PERMANENT_PROVINCE',
		'PERMANENT_MUNICIPALITY',
		'PERMANENT_ADDRESS',
		'PERMANENT_ZIPCODE',
		'CONTACT_NUM',
		'HEIGHT',
		'WEIGHT',
		'EMAIL',
		'RELIGION',
		'BLOOD_TYPE',
		'SPECIAL_SKILL',
		'AILMENT',
		'DISABILITY',
		'FIRST_CHOICE',
		'SECOND_CHOICE',
		'THIRD_CHOICE',
		'APPLICATION_TYPE',
		'HS_SCHOOL',
		'HS_GRADYR',
		'HS_ADDRESS',
		'HSGWA',
		'STATUS',
		'COL_SCHOOL',
		'COL_ADDRESS',
		'COL_YEAR',
		'COL_COURSE',
		'PROFILEPIC',
		'FINAL_COURSE',
		'SUFFIX',
		'PASSPORT',
		'COUNTRY_OF_ORIGIN',
		'DATE_ISSUED',
		'PLACE_ISSUED',
		'GUARDIAN',
		'STUD_PROGRAM_TYPE',
		'TRACK',
		'STRAND',
		'GRADE_LVL',
		'CAMPUS',
		'GS_COURSE',
		'GS_CAMPUS',
		'TIMESTAMP',
		'ELEM_SCHOOL',
		'ELEM_GRADYR',
		'ELEM_ADDRESS',
		'PRIMARY_SCHOOL',
		'PRIMARY_GRADYR',
		'PRIMARY_ADDRESS',
		'entrance_credentials',
		'SHS_SCHOOL',
		'SHS_ADDRESS',
		'SHSGWA',
		'SHS_GRADYR',
		'LASTSCHOOL',
		'PARENT',
		'MS_SCHOOL',
		'MS_GRADYR',
		'COL_GRADYR',
		'ONLINE_ID',
		'SIGNPIC',
		'IPGroup',
		'WhatGroup',
		'ModeTransport',
		'Residence'
	];

	public function r_guardian()
	{
		return $this->belongsTo(RGuardian::class, 'GUARDIAN');
	}

	public function r_campus()
	{
		return $this->belongsTo(RCampus::class, 'CAMPUS');
	}

	public function r_parent()
	{
		return $this->belongsTo(RParent::class, 'PARENT');
	}

	public function r_medicals()
	{
		return $this->hasMany(RMedical::class, 'APPLICANTID');
	}

	public function t_document_submitted_basics()
	{
		return $this->hasMany(TDocumentSubmittedBasic::class, 'APPLICANT');
	}

	public function t_document_submitted_gs()
	{
		return $this->hasMany(TDocumentSubmittedG::class, 'APPLICANT');
	}

	public function t_ept_grades()
	{
		return $this->hasMany(TEptGrade::class, 'APPLICANTID');
	}

	public function t_gmats()
	{
		return $this->hasMany(TGmat::class, 'APPLICANTID');
	}

	public function t_hs_grades()
	{
		return $this->hasMany(THsGrade::class, 'APPLICANTID');
	}

	public function t_interviews()
	{
		return $this->hasMany(TInterview::class, 'APPLICANTID');
	}

	public function t_interview_basics()
	{
		return $this->hasMany(TInterviewBasic::class, 'APPLICANTID');
	}

	public function t_interview_gs()
	{
		return $this->hasMany(TInterviewG::class, 'APPLICANTID');
	}
}

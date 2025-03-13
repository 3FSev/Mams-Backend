<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RUser
 * 
 * @property int $ID
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
 * @property string|null $PROFILEPIC
 * @property Carbon $DATE_REGISTERED
 * @property string|null $usertype
 * @property string|null $Title
 * @property string|null $Fcode
 * 
 * @property RAccount $r_account
 * @property Collection|RClearanceOffice[] $r_clearance_offices
 * @property Collection|RCollege[] $r_colleges
 * @property Collection|RFacultyCampusAssignment[] $r_faculty_campus_assignments
 * @property Collection|RSignatory[] $r_signatories
 * @property Collection|RSystemConfigScheduleEog[] $r_system_config_schedule_eogs
 * @property Collection|TCompreLine[] $t_compre_lines
 * @property Collection|TInterview[] $t_interviews
 * @property Collection|TInterviewBasic[] $t_interview_basics
 * @property Collection|TInterviewG[] $t_interview_gs
 * @property Collection|TOverrideRec[] $t_override_recs
 * @property Collection|TStudentGrade[] $t_student_grades
 *
 * @package App\Models
 */
class RUser extends Model
{
	protected $table = 'r_user';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'DOB' => 'datetime',
		'DATE_REGISTERED' => 'datetime'
	];

	protected $fillable = [
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
		'PROFILEPIC',
		'DATE_REGISTERED',
		'usertype',
		'Title',
		'Fcode'
	];

	public function r_account()
	{
		return $this->hasOne(RAccount::class, 'userid');
	}

	public function r_campus()
	{
		return $this->hasOne(RCampus::class, 'DIRECTOR');
	}


	public function r_clearance_offices()
	{
		return $this->hasMany(RClearanceOffice::class, 'OFFICE_HEAD');
	}

	public function r_colleges()
	{
		return $this->hasMany(RCollege::class, 'DEAN');
	}

	public function r_faculty_campus_assignments()
	{
		return $this->hasMany(RFacultyCampusAssignment::class, 'faculty');
	}

	public function r_signatories()
	{
		return $this->hasMany(RSignatory::class, 'OFFICE_HEAD');
	}

	public function r_system_config_schedule_eogs()
	{
		return $this->hasMany(RSystemConfigScheduleEog::class, 'FACULTY');
	}

	public function t_compre_lines()
	{
		return $this->hasMany(TCompreLine::class, 'FACULTY');
	}

	public function t_interviews()
	{
		return $this->hasMany(TInterview::class, 'INTERVIEWER');
	}

	public function t_interview_basics()
	{
		return $this->hasMany(TInterviewBasic::class, 'INTERVIEWER');
	}

	public function t_interview_gs()
	{
		return $this->hasMany(TInterviewG::class, 'INTERVIEWER');
	}

	public function t_override_recs()
	{
		return $this->hasMany(TOverrideRec::class, 'USER');
	}

	public function t_student_grades()
	{
		return $this->hasMany(TStudentGrade::class, 'ENCODED_BY');
	}
}

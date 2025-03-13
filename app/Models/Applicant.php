<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Applicant
 * 
 * @property int $ID
 * @property string|null $student_no
 * @property int|null $username
 * @property string|null $val
 * @property string $fname
 * @property string|null $mname
 * @property string $lname
 * @property string|null $contact_num
 * @property string|null $program_type
 * @property Carbon|null $dob
 * @property Carbon|null $DATEAPPLIED
 * @property string|null $placeofbirth
 * @property string $password
 * @property string|null $gender
 * @property string|null $email
 * @property string|null $civilstatus
 * @property string|null $nationality
 * @property string|null $resident_region
 * @property string|null $resident_province
 * @property string|null $resident_municipality
 * @property string|null $resident_address
 * @property string|null $resident_zipcode
 * @property string|null $permanent_region
 * @property string|null $permanent_province
 * @property string|null $permanent_municipality
 * @property string|null $permanent_address
 * @property string|null $permanent_zipcode
 * @property string|null $religion
 * @property int|null $first_choice
 * @property int|null $second_choice
 * @property int|null $third_choice
 * @property string|null $application_type
 * @property string|null $hs_school
 * @property string|null $hs_gradyr
 * @property string|null $hs_address
 * @property string|null $hsgwa
 * @property string|null $elem_school
 * @property string|null $elem_address
 * @property string|null $elem_gradyr
 * @property string|null $shs_school
 * @property string|null $shs_address
 * @property string|null $shsgwa
 * @property string|null $shs_gradyr
 * @property int|null $track
 * @property int|null $strand
 * @property string|null $f_fname
 * @property string|null $f_mname
 * @property string|null $f_lname
 * @property string|null $m_fname
 * @property string|null $m_mname
 * @property string|null $m_lname
 * @property string|null $m_contact_num
 * @property string|null $m_province
 * @property string|null $m_municipality
 * @property string|null $m_address
 * @property string|null $m_zipcode
 * @property string|null $g_fname
 * @property string|null $g_mname
 * @property string|null $g_lname
 * @property string|null $g_contact_num
 * @property string|null $g_relationship
 * @property string|null $g_province
 * @property string|null $g_municipality
 * @property string|null $g_address
 * @property string|null $g_zipcode
 * @property string|null $PROFILEPIC
 * @property string|null $lastschool
 * @property string|null $FRONTCARDPIC
 * @property string|null $BACKCARDPIC
 * @property string|null $BCPIC
 * @property string|null $GOODMORALPIC
 * @property string|null $TRANSFERPIC
 * @property string|null $MARRIEDPIC
 * @property int|null $GRADE_LVL
 * @property int|null $CAMPUS
 * @property string|null $COL_SCHOOL
 * @property string|null $COL_YEAR
 * @property string|null $COL_COURSE
 * @property string|null $COL_ADDRESS
 * @property bool|null $DEACTIVATE
 * @property int|null $SY
 * @property int|null $SYSEM
 * @property int|null $F_AGE
 * @property string|null $F_LIVINGSTATUS
 * @property string|null $F_PHONE
 * @property string|null $F_EDUC
 * @property string|null $F_OCCUPATION
 * @property string|null $F_COMPANY
 * @property int|null $M_AGE
 * @property string|null $M_LIVINGSTATUS
 * @property string|null $M_EDUC
 * @property string|null $M_OCCUPATION
 * @property string|null $M_COMPANY
 * @property string|null $P_MARITAL
 * @property int|null $NUM_CHILDREN
 * @property int|null $NUM_BRO
 * @property int|null $NUM_SIS
 * @property string|null $IPGroup
 * @property string|null $WhatGroup
 * @property string|null $ModeTransport
 * @property string|null $Residence
 * @property string|null $OFW_M
 * @property string|null $Country_M
 * @property string|null $OFW_F
 * @property string|null $Country_F
 *
 * @package App\Models
 */
class Applicant extends Model
{
	protected $table = 'applicant';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'username' => 'int',
		'dob' => 'datetime',
		'DATEAPPLIED' => 'datetime',
		'first_choice' => 'int',
		'second_choice' => 'int',
		'third_choice' => 'int',
		'track' => 'int',
		'strand' => 'int',
		'GRADE_LVL' => 'int',
		'CAMPUS' => 'int',
		'DEACTIVATE' => 'bool',
		'SY' => 'int',
		'SYSEM' => 'int',
		'F_AGE' => 'int',
		'M_AGE' => 'int',
		'NUM_CHILDREN' => 'int',
		'NUM_BRO' => 'int',
		'NUM_SIS' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'student_no',
		'username',
		'val',
		'fname',
		'mname',
		'lname',
		'contact_num',
		'program_type',
		'dob',
		'DATEAPPLIED',
		'placeofbirth',
		'password',
		'gender',
		'email',
		'civilstatus',
		'nationality',
		'resident_region',
		'resident_province',
		'resident_municipality',
		'resident_address',
		'resident_zipcode',
		'permanent_region',
		'permanent_province',
		'permanent_municipality',
		'permanent_address',
		'permanent_zipcode',
		'religion',
		'first_choice',
		'second_choice',
		'third_choice',
		'application_type',
		'hs_school',
		'hs_gradyr',
		'hs_address',
		'hsgwa',
		'elem_school',
		'elem_address',
		'elem_gradyr',
		'shs_school',
		'shs_address',
		'shsgwa',
		'shs_gradyr',
		'track',
		'strand',
		'f_fname',
		'f_mname',
		'f_lname',
		'm_fname',
		'm_mname',
		'm_lname',
		'm_contact_num',
		'm_province',
		'm_municipality',
		'm_address',
		'm_zipcode',
		'g_fname',
		'g_mname',
		'g_lname',
		'g_contact_num',
		'g_relationship',
		'g_province',
		'g_municipality',
		'g_address',
		'g_zipcode',
		'PROFILEPIC',
		'lastschool',
		'FRONTCARDPIC',
		'BACKCARDPIC',
		'BCPIC',
		'GOODMORALPIC',
		'TRANSFERPIC',
		'MARRIEDPIC',
		'GRADE_LVL',
		'CAMPUS',
		'COL_SCHOOL',
		'COL_YEAR',
		'COL_COURSE',
		'COL_ADDRESS',
		'DEACTIVATE',
		'SY',
		'SYSEM',
		'F_AGE',
		'F_LIVINGSTATUS',
		'F_PHONE',
		'F_EDUC',
		'F_OCCUPATION',
		'F_COMPANY',
		'M_AGE',
		'M_LIVINGSTATUS',
		'M_EDUC',
		'M_OCCUPATION',
		'M_COMPANY',
		'P_MARITAL',
		'NUM_CHILDREN',
		'NUM_BRO',
		'NUM_SIS',
		'IPGroup',
		'WhatGroup',
		'ModeTransport',
		'Residence',
		'OFW_M',
		'Country_M',
		'OFW_F',
		'Country_F'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblpersonaldatum
 * 
 * @property string $StudNo
 * @property string $LName
 * @property string $FName
 * @property string $MName
 * @property string|null $NName
 * @property string $CY
 * @property string $TY
 * @property string|null $Mobile
 * @property string|null $Email
 * @property string|null $CityAddr
 * @property string|null $CityRegion
 * @property int|null $CityProvince
 * @property int|null $CityMunicipality
 * @property string|null $CityTelNo
 * @property string|null $CityZip
 * @property string|null $ProvAddr
 * @property string|null $ProvRegion
 * @property int|null $ProvProvince
 * @property int|null $ProvMunicipality
 * @property string|null $ProvTelNo
 * @property string|null $ProvZip
 * @property Carbon|null $BDate
 * @property string|null $BPlace
 * @property int|null $Age
 * @property string|null $Gender
 * @property string|null $CID
 * @property string|null $RID
 * @property string|null $OtherCitizenship
 * @property int|null $Status
 * @property string $ACRNO
 * @property Carbon $ACRDATE
 * @property string|null $ICardNo
 * @property string|null $VisaStatus
 * @property string|null $VisaType
 * @property Carbon|null $AuthorizedStayDate
 * @property Carbon|null $AuthorizedStayDateTo
 * @property string|null $PassportNo
 * @property Carbon|null $DateIssued
 * @property string|null $PlaceIssued
 * @property string|null $OriginCountry
 * @property string|null $RemarksPassport
 * @property string|null $Height
 * @property string|null $Weight
 * @property string|null $BloodType
 * @property Carbon|null $DateApplied
 * @property string $AppStat
 * @property Carbon|null $StatDate
 * @property string $course1
 * @property string|null $course2
 * @property string|null $course3
 * @property string|null $CourseType
 * @property string|null $ApplicationType
 * @property string|null $FCourseCode
 * @property string|null $CourseCode
 * @property string $SectCode
 * @property string $YearLevel
 * @property string $StudentType
 * @property string $StudentStatus
 * @property string|null $AdmissionStatus
 * @property string|null $EducationLevel
 * @property string|null $NSTP
 * @property int $ForeignExempt
 * @property Carbon|null $DateEntered
 * @property Carbon|null $DateGraduated
 * @property Carbon|null $DateCreated
 * @property string|null $CreatedBy
 * @property Carbon|null $DateEdited
 * @property string|null $EditedBy
 * @property Carbon|null $InterviewDate
 * @property string|null $ApplicantNo
 * @property string|null $DateEnrolled
 * @property string|null $DateGraduation
 * @property Carbon|null $timestamp
 *
 * @package App\Models
 */
class Tblpersonaldatum extends Model
{
	protected $table = 'tblpersonaldata';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CityProvince' => 'int',
		'CityMunicipality' => 'int',
		'ProvProvince' => 'int',
		'ProvMunicipality' => 'int',
		'BDate' => 'datetime',
		'Age' => 'int',
		'Status' => 'int',
		'ACRDATE' => 'datetime',
		'AuthorizedStayDate' => 'datetime',
		'AuthorizedStayDateTo' => 'datetime',
		'DateIssued' => 'datetime',
		'DateApplied' => 'datetime',
		'StatDate' => 'datetime',
		'ForeignExempt' => 'int',
		'DateEntered' => 'datetime',
		'DateGraduated' => 'datetime',
		'DateCreated' => 'datetime',
		'DateEdited' => 'datetime',
		'InterviewDate' => 'datetime',
		'timestamp' => 'datetime'
	];

	protected $fillable = [
		'NName',
		'CY',
		'TY',
		'Mobile',
		'Email',
		'CityAddr',
		'CityRegion',
		'CityProvince',
		'CityMunicipality',
		'CityTelNo',
		'CityZip',
		'ProvAddr',
		'ProvRegion',
		'ProvProvince',
		'ProvMunicipality',
		'ProvTelNo',
		'ProvZip',
		'BDate',
		'BPlace',
		'Age',
		'Gender',
		'CID',
		'RID',
		'OtherCitizenship',
		'Status',
		'ACRNO',
		'ACRDATE',
		'ICardNo',
		'VisaStatus',
		'VisaType',
		'AuthorizedStayDate',
		'AuthorizedStayDateTo',
		'PassportNo',
		'DateIssued',
		'PlaceIssued',
		'OriginCountry',
		'RemarksPassport',
		'Height',
		'Weight',
		'BloodType',
		'DateApplied',
		'AppStat',
		'StatDate',
		'course1',
		'course2',
		'course3',
		'CourseType',
		'ApplicationType',
		'FCourseCode',
		'CourseCode',
		'SectCode',
		'YearLevel',
		'StudentType',
		'StudentStatus',
		'AdmissionStatus',
		'EducationLevel',
		'NSTP',
		'ForeignExempt',
		'DateEntered',
		'DateGraduated',
		'DateCreated',
		'CreatedBy',
		'DateEdited',
		'EditedBy',
		'InterviewDate',
		'ApplicantNo',
		'DateEnrolled',
		'DateGraduation',
		'timestamp'
	];
}

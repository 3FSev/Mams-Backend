<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblstudclasslist
 * 
 * @property int $ID
 * @property string $SY
 * @property string $CourseCode
 * @property int $YearLevel
 * @property string $Sem
 * @property string $ParentSection
 * @property string $SectCode
 * @property string $SubjCode
 * @property string $ESubjCode
 * @property string $GradeStatus
 * @property string $StudNo
 * @property Carbon $DateEnrolled
 * @property string $EnrolledBy
 * @property Carbon $DateCreated
 * @property string $UserID
 * @property string $FinalGrade
 * @property string $ComputedFinalGrade
 * @property int $IsPosted
 * @property string $ReExam
 * @property int $RemarksID
 * @property string $Remarks
 * @property string|null $School
 * @property string|null $Types
 * @property string|null $IsTransferee
 * @property string|null $TransfereeID
 * @property int|null $SORTING
 * @property int|null $isNotDeleted
 *
 * @package App\Models
 */
class Tblstudclasslist extends Model
{
	protected $table = 'tblstudclasslist';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'YearLevel' => 'int',
		'DateEnrolled' => 'datetime',
		'DateCreated' => 'datetime',
		'IsPosted' => 'int',
		'RemarksID' => 'int',
		'SORTING' => 'int',
		'isNotDeleted' => 'int'
	];

	protected $fillable = [
		'ID',
		'YearLevel',
		'ParentSection',
		'GradeStatus',
		'DateEnrolled',
		'EnrolledBy',
		'DateCreated',
		'UserID',
		'FinalGrade',
		'ComputedFinalGrade',
		'IsPosted',
		'ReExam',
		'RemarksID',
		'Remarks',
		'School',
		'Types',
		'IsTransferee',
		'TransfereeID',
		'SORTING',
		'isNotDeleted'
	];
}

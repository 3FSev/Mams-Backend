<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TShiftHistory
 * 
 * @property int $ID
 * @property int|null $STUD_ID
 * @property int|null $APPLICANT
 * @property string|null $STUDENT_NO
 * @property string|null $CURRICULUM
 * @property string|null $NSTP
 * @property string|null $NSTP2
 * @property string|null $COURSE
 * @property string|null $COURSE_TO
 * @property string|null $SECTION
 * @property string|null $STUDENT_TYPE
 * @property string|null $YEAR_LEVEL_APPLIED
 * @property string|null $PRESENT_YEAR_LEVEL
 * @property string|null $SEMESTER_APPLIED
 * @property string|null $PRESENT_SEMESTER
 * @property string|null $ADMISSION_STATUS
 * @property string|null $ADMISSION_YEAR
 * @property Carbon $DATE_ADDED
 * @property string|null $STATUS
 *
 * @package App\Models
 */
class TShiftHistory extends Model
{
	protected $table = 't_shift_history';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUD_ID' => 'int',
		'APPLICANT' => 'int',
		'DATE_ADDED' => 'datetime'
	];

	protected $fillable = [
		'STUD_ID',
		'APPLICANT',
		'STUDENT_NO',
		'CURRICULUM',
		'NSTP',
		'NSTP2',
		'COURSE',
		'COURSE_TO',
		'SECTION',
		'STUDENT_TYPE',
		'YEAR_LEVEL_APPLIED',
		'PRESENT_YEAR_LEVEL',
		'SEMESTER_APPLIED',
		'PRESENT_SEMESTER',
		'ADMISSION_STATUS',
		'ADMISSION_YEAR',
		'DATE_ADDED',
		'STATUS'
	];
}

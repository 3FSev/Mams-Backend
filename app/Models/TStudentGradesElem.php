<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentGradesElem
 * 
 * @property int $ID
 * @property int|null $SYSEM
 * @property int|null $STUDENTID
 * @property int|null $SOSID
 * @property int|null $SUBJECT_ID
 * @property string|null $FINALGRADE
 * @property string|null $FINALREMARKS
 * @property Carbon|null $LAST_UPDATED
 * @property int|null $ENCODED_BY
 * @property string|null $RECENT_GRADE
 * @property Carbon|null $GRADE_POSTED
 * @property Carbon|null $GRADE_FINALIZED
 * @property string|null $POSTED
 * @property string|null $FINALIZED
 * @property int|null $SY
 * @property int|null $GRADE_LVL
 * @property string|null $OTHER_REMARKS
 * @property string|null $FINAL_RATING
 * @property string|null $PERIOD1
 * @property string|null $PERIOD2
 * @property string|null $PERIOD3
 * @property string|null $PERIOD4
 * @property string|null $PERIOD5
 * @property string|null $PERIOD1_STATUS
 * @property string|null $PERIOD2_STATUS
 * @property string|null $PERIOD3_STATUS
 * @property string|null $PERIOD4_STATUS
 * @property string|null $PROGRAM_TYPE
 * @property int|null $FACULTY
 * @property int|null $tblid
 *
 * @package App\Models
 */
class TStudentGradesElem extends Model
{
	protected $table = 't_student_grades_elem';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SYSEM' => 'int',
		'STUDENTID' => 'int',
		'SOSID' => 'int',
		'SUBJECT_ID' => 'int',
		'LAST_UPDATED' => 'datetime',
		'ENCODED_BY' => 'int',
		'GRADE_POSTED' => 'datetime',
		'GRADE_FINALIZED' => 'datetime',
		'SY' => 'int',
		'GRADE_LVL' => 'int',
		'FACULTY' => 'int',
		'tblid' => 'int'
	];

	protected $fillable = [
		'SYSEM',
		'STUDENTID',
		'SOSID',
		'SUBJECT_ID',
		'FINALGRADE',
		'FINALREMARKS',
		'LAST_UPDATED',
		'ENCODED_BY',
		'RECENT_GRADE',
		'GRADE_POSTED',
		'GRADE_FINALIZED',
		'POSTED',
		'FINALIZED',
		'SY',
		'GRADE_LVL',
		'OTHER_REMARKS',
		'FINAL_RATING',
		'PERIOD1',
		'PERIOD2',
		'PERIOD3',
		'PERIOD4',
		'PERIOD5',
		'PERIOD1_STATUS',
		'PERIOD2_STATUS',
		'PERIOD3_STATUS',
		'PERIOD4_STATUS',
		'PROGRAM_TYPE',
		'FACULTY',
		'tblid'
	];
}

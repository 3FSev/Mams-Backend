<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentEnrollmentBasicHistory
 * 
 * @property int $ID
 * @property int|null $SY
 * @property int|null $STUDENT
 * @property int|null $SECTION
 * @property int|null $SECTION_OFFERING_ELEM_ID
 * @property int|null $GRADE_LVL
 * @property string|null $STATUS
 * @property Carbon|null $DATE_ENROLLED
 * @property int|null $ENROLLED_BY
 *
 * @package App\Models
 */
class TStudentEnrollmentBasicHistory extends Model
{
	protected $table = 't_student_enrollment_basic_history';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY' => 'int',
		'STUDENT' => 'int',
		'SECTION' => 'int',
		'SECTION_OFFERING_ELEM_ID' => 'int',
		'GRADE_LVL' => 'int',
		'DATE_ENROLLED' => 'datetime',
		'ENROLLED_BY' => 'int'
	];

	protected $fillable = [
		'SY',
		'STUDENT',
		'SECTION',
		'SECTION_OFFERING_ELEM_ID',
		'GRADE_LVL',
		'STATUS',
		'DATE_ENROLLED',
		'ENROLLED_BY'
	];
}

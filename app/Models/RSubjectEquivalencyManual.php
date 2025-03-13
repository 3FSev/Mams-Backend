<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RSubjectEquivalencyManual
 * 
 * @property int $ID
 * @property int|null $STUDENT_ID
 * @property Carbon|null $DATE_PROCESSED
 * @property int|null $CURR_LINE_ID
 * @property string|null $SUB_CODE
 * @property string|null $SUB_NAME
 * @property string|null $SUB_DESC
 * @property float|null $SUB_UNITS
 * @property string|null $SUB_GRADES
 * @property string|null $STATUS
 * @property string|null $REMARKS
 * @property string|null $SCHOOL
 * @property string|null $SY
 * @property string|null $SEMESTER
 * @property int|null $YEAR_LVL
 * @property string|null $GRADE_STATUS
 * @property int|null $SUBJECT_ID
 * @property string|null $UPDATED_BY
 * @property Carbon|null $DATE_UPDATED
 * @property string|null $OLD_GRADE
 * @property string|null $CROSS_ENROLLED
 * @property string|null $ACADEMIC_TYPE
 * 
 * @property RSubject|null $r_subject
 *
 * @package App\Models
 */
class RSubjectEquivalencyManual extends Model
{
	protected $table = 'r_subject_equivalency_manual';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUDENT_ID' => 'int',
		'DATE_PROCESSED' => 'datetime',
		'CURR_LINE_ID' => 'int',
		'SUB_UNITS' => 'float',
		'YEAR_LVL' => 'int',
		'SUBJECT_ID' => 'int',
		'DATE_UPDATED' => 'datetime',
		'CROSS_ENROLLED' => 'binary'
	];

	protected $fillable = [
		'STUDENT_ID',
		'DATE_PROCESSED',
		'CURR_LINE_ID',
		'SUB_CODE',
		'SUB_NAME',
		'SUB_DESC',
		'SUB_UNITS',
		'SUB_GRADES',
		'STATUS',
		'REMARKS',
		'SCHOOL',
		'SY',
		'SEMESTER',
		'YEAR_LVL',
		'GRADE_STATUS',
		'SUBJECT_ID',
		'UPDATED_BY',
		'DATE_UPDATED',
		'OLD_GRADE',
		'CROSS_ENROLLED',
		'ACADEMIC_TYPE'
	];

	public function r_subject()
	{
		return $this->belongsTo(RSubject::class, 'SUBJECT_ID');
	}
}

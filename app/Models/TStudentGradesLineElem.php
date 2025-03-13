<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentGradesLineElem
 * 
 * @property int $ID
 * @property int|null $SGID
 * @property string|null $GRADING_SYSTEM_LABEL
 * @property float|null $GRADING_SYSTEM_PERCENT
 * @property string|null $GRADE
 * @property Carbon $DATE_ADDED
 * @property int|null $PERIOD
 * @property string|null $IS_MULTIPLE
 *
 * @package App\Models
 */
class TStudentGradesLineElem extends Model
{
	protected $table = 't_student_grades_line_elem';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SGID' => 'int',
		'GRADING_SYSTEM_PERCENT' => 'float',
		'DATE_ADDED' => 'datetime',
		'PERIOD' => 'int'
	];

	protected $fillable = [
		'SGID',
		'GRADING_SYSTEM_LABEL',
		'GRADING_SYSTEM_PERCENT',
		'GRADE',
		'DATE_ADDED',
		'PERIOD',
		'IS_MULTIPLE'
	];
}

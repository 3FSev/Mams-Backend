<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentGradesLineDelete
 * 
 * @property int $SGID
 * @property string $GRADING_SYSTEM_LABEL
 * @property float $GRADING_SYSTEM_PERCENT
 * @property string|null $GRADE
 * @property Carbon $DATE_ADDED
 * @property int|null $GRADING_SYSTEM_PERIOD
 * @property Carbon|null $date_updated
 * @property float|null $updated_by
 * @property bool|null $finalized
 * 
 * @property TStudentGradesDelete $t_student_grades_delete
 *
 * @package App\Models
 */
class TStudentGradesLineDelete extends Model
{
	protected $table = 't_student_grades_line_delete';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'SGID' => 'int',
		'GRADING_SYSTEM_PERCENT' => 'float',
		'DATE_ADDED' => 'datetime',
		'GRADING_SYSTEM_PERIOD' => 'int',
		'date_updated' => 'datetime',
		'updated_by' => 'float',
		'finalized' => 'bool'
	];

	protected $fillable = [
		'SGID',
		'GRADING_SYSTEM_LABEL',
		'GRADING_SYSTEM_PERCENT',
		'GRADE',
		'DATE_ADDED',
		'GRADING_SYSTEM_PERIOD',
		'date_updated',
		'updated_by',
		'finalized'
	];

	public function t_student_grades_delete()
	{
		return $this->belongsTo(TStudentGradesDelete::class, 'SGID');
	}
}

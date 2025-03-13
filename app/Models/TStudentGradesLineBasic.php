<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentGradesLineBasic
 * 
 * @property int $ID
 * @property int|null $SGID
 * @property string|null $GRADING_SYSTEM_LABEL
 * @property float|null $GRADING_SYSTEM_PERCENT
 * @property string|null $GRADE
 * @property Carbon|null $DATE_ADDED
 * @property int|null $PERIOD
 * @property string|null $IS_MULTIPLE
 * 
 * @property Collection|TStudentGradesLineBasicM[] $t_student_grades_line_basic_ms
 *
 * @package App\Models
 */
class TStudentGradesLineBasic extends Model
{
	protected $table = 't_student_grades_line_basic';
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

	public function t_student_grades_line_basic_ms()
	{
		return $this->hasMany(TStudentGradesLineBasicM::class, 'SGLBID');
	}
}

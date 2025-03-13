<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudCurriculum
 * 
 * @property int $ID
 * @property int|null $STUDENT_ID
 * @property string|null $STUD_PROGRAM_TYPE
 * @property int|null $CURRICULUM
 * @property int|null $GRADE_LVL_START
 * @property Carbon $DATE_ADDED
 * @property Carbon|null $DATE_GRADUATED
 * @property int|null $REMEDIAL_COURSE
 * @property int|null $REMEDIAL_CURRICULUM
 * @property Carbon|null $DATE_APPLIED_GRADUATION
 * @property string|null $TAGGRADAPP
 * 
 * @property TStudent|null $t_student
 *
 * @package App\Models
 */
class TStudCurriculum extends Model
{
	protected $table = 't_stud_curriculum';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUDENT_ID' => 'int',
		'CURRICULUM' => 'int',
		'GRADE_LVL_START' => 'int',
		'DATE_ADDED' => 'datetime',
		'DATE_GRADUATED' => 'datetime',
		'REMEDIAL_COURSE' => 'int',
		'REMEDIAL_CURRICULUM' => 'int',
		'DATE_APPLIED_GRADUATION' => 'datetime'
	];

	protected $fillable = [
		'STUDENT_ID',
		'STUD_PROGRAM_TYPE',
		'CURRICULUM',
		'GRADE_LVL_START',
		'DATE_ADDED',
		'DATE_GRADUATED',
		'REMEDIAL_COURSE',
		'REMEDIAL_CURRICULUM',
		'DATE_APPLIED_GRADUATION',
		'TAGGRADAPP'
	];

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT_ID');
	}
}

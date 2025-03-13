<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RCourseGradePrereq
 * 
 * @property int $ID
 * @property int|null $YEAR_LEVEL
 * @property string|null $SEMESTER
 * @property int|null $COURSE
 * @property float|null $GRADE
 * @property int|null $STATUS
 * @property int|null $ADDED_BY
 * @property Carbon $DATE_ADDED
 * @property int|null $UPDATED_BY
 * @property Carbon|null $DATE_UPDATED
 * 
 * @property RCourse|null $r_course
 *
 * @package App\Models
 */
class RCourseGradePrereq extends Model
{
	protected $table = 'r_course_grade_prereq';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'YEAR_LEVEL' => 'int',
		'COURSE' => 'int',
		'GRADE' => 'float',
		'STATUS' => 'int',
		'ADDED_BY' => 'int',
		'DATE_ADDED' => 'datetime',
		'UPDATED_BY' => 'int',
		'DATE_UPDATED' => 'datetime'
	];

	protected $fillable = [
		'YEAR_LEVEL',
		'SEMESTER',
		'COURSE',
		'GRADE',
		'STATUS',
		'ADDED_BY',
		'DATE_ADDED',
		'UPDATED_BY',
		'DATE_UPDATED'
	];

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'COURSE');
	}
}

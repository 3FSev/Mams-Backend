<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TCompreGrade
 * 
 * @property int $ID
 * @property int|null $STUDENT
 * @property int|null $COURSE
 * @property string|null $RESULT
 * @property Carbon|null $DATE_EXAM
 * @property Carbon|null $DATE_ADDED
 * @property int|null $ENCODED_BY
 * 
 * @property TStudent|null $t_student
 * @property RCourse|null $r_course
 *
 * @package App\Models
 */
class TCompreGrade extends Model
{
	protected $table = 't_compre_grade';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUDENT' => 'int',
		'COURSE' => 'int',
		'DATE_EXAM' => 'datetime',
		'DATE_ADDED' => 'datetime',
		'ENCODED_BY' => 'int'
	];

	protected $fillable = [
		'STUDENT',
		'COURSE',
		'RESULT',
		'DATE_EXAM',
		'DATE_ADDED',
		'ENCODED_BY'
	];

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT');
	}

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'COURSE');
	}
}

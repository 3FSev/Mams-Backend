<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentGradesLineBasicM
 * 
 * @property int $ID
 * @property int|null $SGLBID
 * @property string|null $LABEL
 * @property string|null $GRADE
 * @property int|null $sosid
 * @property string|null $STATUS
 * 
 * @property TStudentGradesLineBasic|null $t_student_grades_line_basic
 *
 * @package App\Models
 */
class TStudentGradesLineBasicM extends Model
{
	protected $table = 't_student_grades_line_basic_m';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SGLBID' => 'int',
		'sosid' => 'int'
	];

	protected $fillable = [
		'SGLBID',
		'LABEL',
		'GRADE',
		'sosid',
		'STATUS'
	];

	public function t_student_grades_line_basic()
	{
		return $this->belongsTo(TStudentGradesLineBasic::class, 'SGLBID');
	}
}

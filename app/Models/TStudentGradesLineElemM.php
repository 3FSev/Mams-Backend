<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentGradesLineElemM
 * 
 * @property int $ID
 * @property int|null $SGLBID
 * @property string|null $LABEL
 * @property string|null $GRADE
 * @property int|null $sosid
 * @property string|null $STATUS
 *
 * @package App\Models
 */
class TStudentGradesLineElemM extends Model
{
	protected $table = 't_student_grades_line_elem_m';
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
}

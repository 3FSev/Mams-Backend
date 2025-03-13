<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TAccreditation
 * 
 * @property int $ID
 * @property int|null $STUDENT_ID
 * @property Carbon $DATE_PROCESSED
 * @property string|null $SUB_CODE
 * @property string|null $SUB_DESC
 * @property float|null $SUB_UNITS
 * @property string|null $SUB_GRADES
 * @property string|null $STATUS
 * @property string|null $REMARKS
 * @property string|null $SCHOOL
 * @property int|null $SY
 * @property string|null $SEMESTER
 * @property int|null $YEAR_LVL
 * @property int|null $USER
 * @property string|null $ACADEMIC_TYPE
 * @property string|null $CROSS_ENROLLED
 * 
 * @property TStudent|null $t_student
 *
 * @package App\Models
 */
class TAccreditation extends Model
{
	protected $table = 't_accreditation';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUDENT_ID' => 'int',
		'DATE_PROCESSED' => 'datetime',
		'SUB_UNITS' => 'float',
		'SY' => 'int',
		'YEAR_LVL' => 'int',
		'USER' => 'int',
		'CROSS_ENROLLED' => 'binary'
	];

	protected $fillable = [
		'STUDENT_ID',
		'DATE_PROCESSED',
		'SUB_CODE',
		'SUB_DESC',
		'SUB_UNITS',
		'SUB_GRADES',
		'STATUS',
		'REMARKS',
		'SCHOOL',
		'SY',
		'SEMESTER',
		'YEAR_LVL',
		'USER',
		'ACADEMIC_TYPE',
		'CROSS_ENROLLED'
	];

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT_ID');
	}
}

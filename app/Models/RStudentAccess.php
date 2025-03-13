<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RStudentAccess
 * 
 * @property int $STUDENT_ID
 * @property string $STUDENT_NUMBER
 * @property string $PASSWORD
 * @property string $VAL
 * @property float|null $GENERATED_BY
 * @property Carbon|null $DATE_GENERATED
 * @property string|null $DEFAULT_PASS
 * 
 * @property TStudent $t_student
 *
 * @package App\Models
 */
class RStudentAccess extends Model
{
	protected $table = 'r_student_access';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'STUDENT_ID' => 'int',
		'GENERATED_BY' => 'float',
		'DATE_GENERATED' => 'datetime'
	];

	protected $fillable = [
		'STUDENT_ID',
		'STUDENT_NUMBER',
		'PASSWORD',
		'VAL',
		'GENERATED_BY',
		'DATE_GENERATED',
		'DEFAULT_PASS'
	];

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT_ID');
	}
}

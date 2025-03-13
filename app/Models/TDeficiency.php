<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TDeficiency
 * 
 * @property int $ID
 * @property int|null $STUDENT_ID
 * @property string|null $DEFICIENCY
 * @property string|null $REGISTRATION
 * @property string|null $GRADES
 * @property string|null $CURRICULUM
 * @property Carbon $DATE_SUBMITTED
 * @property int|null $USERID
 * @property string|null $STATUS
 * @property int|null $EDITED_BY
 * 
 * @property TStudent|null $t_student
 *
 * @package App\Models
 */
class TDeficiency extends Model
{
	protected $table = 't_deficiency';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUDENT_ID' => 'int',
		'DATE_SUBMITTED' => 'datetime',
		'USERID' => 'int',
		'EDITED_BY' => 'int'
	];

	protected $fillable = [
		'STUDENT_ID',
		'DEFICIENCY',
		'REGISTRATION',
		'GRADES',
		'CURRICULUM',
		'DATE_SUBMITTED',
		'USERID',
		'STATUS',
		'EDITED_BY'
	];

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT_ID');
	}
}

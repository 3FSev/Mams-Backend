<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TEnrollHistory
 * 
 * @property int|null $STUDENT_ID
 * @property int|null $PR_COURSE
 * @property int|null $PR_YRLVL
 * @property int|null $SY_SEM
 * @property int|null $ASSESSID
 * @property int|null $ASSESS_COURSE
 * @property int|null $ASSESS_YRLVL
 * @property int|null $ENROLLID
 * @property int|null $ENROLL_YRLVL
 * @property Carbon $DATE_CREATED
 * @property int|null $USER
 *
 * @package App\Models
 */
class TEnrollHistory extends Model
{
	protected $table = 't_enroll_history';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'STUDENT_ID' => 'int',
		'PR_COURSE' => 'int',
		'PR_YRLVL' => 'int',
		'SY_SEM' => 'int',
		'ASSESSID' => 'int',
		'ASSESS_COURSE' => 'int',
		'ASSESS_YRLVL' => 'int',
		'ENROLLID' => 'int',
		'ENROLL_YRLVL' => 'int',
		'DATE_CREATED' => 'datetime',
		'USER' => 'int'
	];

	protected $fillable = [
		'STUDENT_ID',
		'PR_COURSE',
		'PR_YRLVL',
		'SY_SEM',
		'ASSESSID',
		'ASSESS_COURSE',
		'ASSESS_YRLVL',
		'ENROLLID',
		'ENROLL_YRLVL',
		'DATE_CREATED',
		'USER'
	];
}

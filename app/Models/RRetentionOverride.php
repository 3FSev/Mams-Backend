<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RRetentionOverride
 * 
 * @property int $id
 * @property int|null $student_id
 * @property int|null $sy_sem
 * @property int|null $course
 * @property int|null $allowed
 * @property Carbon|null $date_allowed
 *
 * @package App\Models
 */
class RRetentionOverride extends Model
{
	protected $table = 'r_retention_override';
	public $timestamps = false;

	protected $casts = [
		'student_id' => 'int',
		'sy_sem' => 'int',
		'course' => 'int',
		'allowed' => 'int',
		'date_allowed' => 'datetime'
	];

	protected $fillable = [
		'student_id',
		'sy_sem',
		'course',
		'allowed',
		'date_allowed'
	];
}

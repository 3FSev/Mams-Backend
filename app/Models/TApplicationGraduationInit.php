<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TApplicationGraduationInit
 * 
 * @property int $id
 * @property string|null $student_id
 * @property string|null $appstatus
 * @property string|null $alumnistatus
 * @property string|null $issostatus
 * @property Carbon|null $dateapplied
 * @property Carbon|null $datealumnitag
 * @property Carbon|null $dateissotag
 * @property Carbon|null $datesubmitted
 * @property string|null $SY
 *
 * @package App\Models
 */
class TApplicationGraduationInit extends Model
{
	protected $table = 't_application_graduation_init';
	public $timestamps = false;

	protected $casts = [
		'dateapplied' => 'datetime',
		'datealumnitag' => 'datetime',
		'dateissotag' => 'datetime',
		'datesubmitted' => 'datetime'
	];

	protected $fillable = [
		'student_id',
		'appstatus',
		'alumnistatus',
		'issostatus',
		'dateapplied',
		'datealumnitag',
		'dateissotag',
		'datesubmitted',
		'SY'
	];
}

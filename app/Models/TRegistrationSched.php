<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TRegistrationSched
 * 
 * @property int $ID
 * @property int $SY_SEM
 * @property Carbon $DATE_FROM
 * @property Carbon $DATE_TO
 *
 * @package App\Models
 */
class TRegistrationSched extends Model
{
	protected $table = 't_registration_sched';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY_SEM' => 'int',
		'DATE_FROM' => 'datetime',
		'DATE_TO' => 'datetime'
	];

	protected $fillable = [
		'SY_SEM',
		'DATE_FROM',
		'DATE_TO'
	];
}

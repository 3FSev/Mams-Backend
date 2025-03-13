<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TUnitsAllowedEnrollment
 * 
 * @property int $id
 * @property int|null $sysem
 * @property int|null $program
 * @property int|null $units_allowed
 * @property string|null $allow_override
 *
 * @package App\Models
 */
class TUnitsAllowedEnrollment extends Model
{
	protected $table = 't_units_allowed_enrollment';
	public $timestamps = false;

	protected $casts = [
		'sysem' => 'int',
		'program' => 'int',
		'units_allowed' => 'int'
	];

	protected $fillable = [
		'sysem',
		'program',
		'units_allowed',
		'allow_override'
	];
}

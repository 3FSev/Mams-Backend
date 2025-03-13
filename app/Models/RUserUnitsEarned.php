<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserUnitsEarned
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $PROGRAM
 * @property string|null $DISCIPLINE
 * @property string|null $SCHOOL
 * @property int|null $PRESENTLY_ENROLLED
 * @property int|null $NO_UNITS
 *
 * @package App\Models
 */
class RUserUnitsEarned extends Model
{
	protected $table = 'r_user_units_earned';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'PRESENTLY_ENROLLED' => 'int',
		'NO_UNITS' => 'int'
	];

	protected $fillable = [
		'USER_PROFILE',
		'PROGRAM',
		'DISCIPLINE',
		'SCHOOL',
		'PRESENTLY_ENROLLED',
		'NO_UNITS'
	];
}

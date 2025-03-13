<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RYrLevelling
 * 
 * @property int $ID
 * @property int|null $COURSE
 * @property float $PERCENTAGE
 * @property int|null $PRIORITY
 * @property string|null $SY
 * @property int|null $FROM_UNITS
 * @property int|null $TO_UNITS
 * @property int|null $YEAR_LEVEL
 *
 * @package App\Models
 */
class RYrLevelling extends Model
{
	protected $table = 'r_yr_levelling';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'COURSE' => 'int',
		'PERCENTAGE' => 'float',
		'PRIORITY' => 'int',
		'FROM_UNITS' => 'int',
		'TO_UNITS' => 'int',
		'YEAR_LEVEL' => 'int'
	];

	protected $fillable = [
		'COURSE',
		'PERCENTAGE',
		'PRIORITY',
		'SY',
		'FROM_UNITS',
		'TO_UNITS',
		'YEAR_LEVEL'
	];
}

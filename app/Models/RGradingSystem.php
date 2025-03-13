<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RGradingSystem
 * 
 * @property int $ID
 * @property string $LABEL
 * @property float $PERCENT
 * @property string $STATUS
 * @property Carbon $DATE_ADDED
 * @property int|null $COURSE
 * @property int|null $PERIOD
 * @property string|null $PROGRAM_TYPE
 *
 * @package App\Models
 */
class RGradingSystem extends Model
{
	protected $table = 'r_grading_system';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'PERCENT' => 'float',
		'DATE_ADDED' => 'datetime',
		'COURSE' => 'int',
		'PERIOD' => 'int'
	];

	protected $fillable = [
		'LABEL',
		'PERCENT',
		'STATUS',
		'DATE_ADDED',
		'COURSE',
		'PERIOD',
		'PROGRAM_TYPE'
	];
}

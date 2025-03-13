<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RSystemConfigSchedule
 * 
 * @property int $ID
 * @property string|null $LABEL
 * @property int|null $COLLEGE
 * @property int|null $YEAR_LEVEL
 * @property Carbon|null $SCHED_FROM
 * @property Carbon|null $SCHED_TO
 * @property int|null $SY_SEM
 * @property string|null $STATUS
 * @property Carbon $DATE_ADDED
 * @property int|null $PERIOD
 * @property int|null $CAMPUS
 * @property string|null $PROGRAM_TYPE
 * @property Carbon|null $DATEOFGRAD
 * 
 * @property RCollege|null $r_college
 * @property TSySem|null $t_sy_sem
 *
 * @package App\Models
 */
class RSystemConfigSchedule extends Model
{
	protected $table = 'r_system_config_schedule';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'COLLEGE' => 'int',
		'YEAR_LEVEL' => 'int',
		'SCHED_FROM' => 'datetime',
		'SCHED_TO' => 'datetime',
		'SY_SEM' => 'int',
		'DATE_ADDED' => 'datetime',
		'PERIOD' => 'int',
		'CAMPUS' => 'int',
		'DATEOFGRAD' => 'datetime'
	];

	protected $fillable = [
		'LABEL',
		'COLLEGE',
		'YEAR_LEVEL',
		'SCHED_FROM',
		'SCHED_TO',
		'SY_SEM',
		'STATUS',
		'DATE_ADDED',
		'PERIOD',
		'CAMPUS',
		'PROGRAM_TYPE',
		'DATEOFGRAD'
	];

	public function r_college()
	{
		return $this->belongsTo(RCollege::class, 'COLLEGE');
	}

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SY_SEM');
	}
}

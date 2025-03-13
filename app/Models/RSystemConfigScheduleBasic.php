<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RSystemConfigScheduleBasic
 * 
 * @property int $ID
 * @property string|null $LABEL
 * @property int|null $GRADE_LVL
 * @property Carbon|null $SCHED_FROM
 * @property Carbon|null $SCHED_TO
 * @property int|null $SY
 * @property string|null $STATUS
 * @property Carbon $DATE_ADDED
 * @property int|null $CAMPUS
 * @property int|null $PERIOD
 * 
 * @property RSy|null $r_sy
 * @property RCampus|null $r_campus
 *
 * @package App\Models
 */
class RSystemConfigScheduleBasic extends Model
{
	protected $table = 'r_system_config_schedule_basic';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'GRADE_LVL' => 'int',
		'SCHED_FROM' => 'datetime',
		'SCHED_TO' => 'datetime',
		'SY' => 'int',
		'DATE_ADDED' => 'datetime',
		'CAMPUS' => 'int',
		'PERIOD' => 'int'
	];

	protected $fillable = [
		'LABEL',
		'GRADE_LVL',
		'SCHED_FROM',
		'SCHED_TO',
		'SY',
		'STATUS',
		'DATE_ADDED',
		'CAMPUS',
		'PERIOD'
	];

	public function r_sy()
	{
		return $this->belongsTo(RSy::class, 'SY');
	}

	public function r_campus()
	{
		return $this->belongsTo(RCampus::class, 'CAMPUS');
	}
}

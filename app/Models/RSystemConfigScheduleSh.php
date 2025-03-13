<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RSystemConfigScheduleSh
 * 
 * @property int $ID
 * @property string|null $LABEL
 * @property int|null $GRADE_LVL
 * @property Carbon|null $SCHED_FROM
 * @property Carbon|null $SCHED_TO
 * @property int|null $SY_SEM
 * @property string|null $STATUS
 * @property Carbon $DATE_ADDED
 * @property int|null $CAMPUS
 * @property int|null $PERIOD
 * 
 * @property TSySem|null $t_sy_sem
 * @property RCampus|null $r_campus
 *
 * @package App\Models
 */
class RSystemConfigScheduleSh extends Model
{
	protected $table = 'r_system_config_schedule_shs';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'GRADE_LVL' => 'int',
		'SCHED_FROM' => 'datetime',
		'SCHED_TO' => 'datetime',
		'SY_SEM' => 'int',
		'DATE_ADDED' => 'datetime',
		'CAMPUS' => 'int',
		'PERIOD' => 'int'
	];

	protected $fillable = [
		'LABEL',
		'GRADE_LVL',
		'SCHED_FROM',
		'SCHED_TO',
		'SY_SEM',
		'STATUS',
		'DATE_ADDED',
		'CAMPUS',
		'PERIOD'
	];

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SY_SEM');
	}

	public function r_campus()
	{
		return $this->belongsTo(RCampus::class, 'CAMPUS');
	}
}

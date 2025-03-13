<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RSystemConfigScheduleEog
 * 
 * @property int $ID
 * @property int|null $FACULTY
 * @property Carbon|null $SCHED_FROM
 * @property Carbon|null $SCHED_TO
 * @property int|null $SOSID
 * @property string|null $STATUS
 * @property Carbon $DATE_ADDED
 * @property int|null $PERIOD
 * @property string|null $PROGRAM_TYPE
 * 
 * @property RUser|null $r_user
 *
 * @package App\Models
 */
class RSystemConfigScheduleEog extends Model
{
	protected $table = 'r_system_config_schedule_eog';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'FACULTY' => 'int',
		'SCHED_FROM' => 'datetime',
		'SCHED_TO' => 'datetime',
		'SOSID' => 'int',
		'DATE_ADDED' => 'datetime',
		'PERIOD' => 'int'
	];

	protected $fillable = [
		'FACULTY',
		'SCHED_FROM',
		'SCHED_TO',
		'SOSID',
		'STATUS',
		'DATE_ADDED',
		'PERIOD',
		'PROGRAM_TYPE'
	];

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'FACULTY');
	}
}

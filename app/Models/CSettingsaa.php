<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CSettingsaa
 * 
 * @property Carbon|null $DateStart
 * @property Carbon|null $DateEnd
 * @property int|null $GradingPeriod
 * @property string|null $sysem
 * @property string|null $SetBy
 * @property Carbon|null $dateSet
 * @property bool|null $allowPrint
 *
 * @package App\Models
 */
class CSettingsaa extends Model
{
	protected $table = 'c_settingsaa';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'DateStart' => 'datetime',
		'DateEnd' => 'datetime',
		'GradingPeriod' => 'int',
		'dateSet' => 'datetime',
		'allowPrint' => 'bool'
	];

	protected $fillable = [
		'DateStart',
		'DateEnd',
		'GradingPeriod',
		'sysem',
		'SetBy',
		'dateSet',
		'allowPrint'
	];
}

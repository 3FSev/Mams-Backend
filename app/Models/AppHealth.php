<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AppHealth
 * 
 * @property int|null $appid
 * @property string|null $vision
 * @property string|null $hearing
 * @property string|null $speech
 * @property string|null $genhealth
 * @property string|null $medical
 * @property string|null $psychiatrist
 * @property Carbon|null $psywhen
 * @property string|null $psychologist
 * @property Carbon|null $psychowhen
 * @property string|null $counselor
 * @property Carbon|null $counwhen
 * @property string|null $applicant_no
 * @property string|null $updated_by
 * @property Carbon|null $date_updated
 *
 * @package App\Models
 */
class AppHealth extends Model
{
	protected $table = 'app_health';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'appid' => 'int',
		'psywhen' => 'datetime',
		'psychowhen' => 'datetime',
		'counwhen' => 'datetime',
		'date_updated' => 'datetime'
	];

	protected $fillable = [
		'appid',
		'vision',
		'hearing',
		'speech',
		'genhealth',
		'medical',
		'psychiatrist',
		'psywhen',
		'psychologist',
		'psychowhen',
		'counselor',
		'counwhen',
		'applicant_no',
		'updated_by',
		'date_updated'
	];
}

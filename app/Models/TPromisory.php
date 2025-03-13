<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TPromisory
 * 
 * @property int $id
 * @property int|null $fromsysem
 * @property int|null $tosysem
 * @property int|null $processed_by
 * @property string|null $reason
 * @property float|null $amount
 * @property int|null $is_forwarded
 * @property Carbon|null $date_processed
 * @property int|null $student_id
 * @property int|null $fromsy
 * @property int|null $tosy
 *
 * @package App\Models
 */
class TPromisory extends Model
{
	protected $table = 't_promisory';
	public $timestamps = false;

	protected $casts = [
		'fromsysem' => 'int',
		'tosysem' => 'int',
		'processed_by' => 'int',
		'amount' => 'float',
		'is_forwarded' => 'int',
		'date_processed' => 'datetime',
		'student_id' => 'int',
		'fromsy' => 'int',
		'tosy' => 'int'
	];

	protected $fillable = [
		'fromsysem',
		'tosysem',
		'processed_by',
		'reason',
		'amount',
		'is_forwarded',
		'date_processed',
		'student_id',
		'fromsy',
		'tosy'
	];
}

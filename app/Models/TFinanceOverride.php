<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TFinanceOverride
 * 
 * @property int|null $sysem
 * @property int|null $student
 * @property int|null $allowed_by
 * @property string|null $atatus
 * @property float|null $amount
 * @property int $id
 * @property Carbon|null $date_processed
 * @property int|null $sy
 *
 * @package App\Models
 */
class TFinanceOverride extends Model
{
	protected $table = 't_finance_override';
	public $timestamps = false;

	protected $casts = [
		'sysem' => 'int',
		'student' => 'int',
		'allowed_by' => 'int',
		'amount' => 'float',
		'date_processed' => 'datetime',
		'sy' => 'int'
	];

	protected $fillable = [
		'sysem',
		'student',
		'allowed_by',
		'atatus',
		'amount',
		'date_processed',
		'sy'
	];
}

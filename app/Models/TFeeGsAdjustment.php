<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TFeeGsAdjustment
 * 
 * @property int $id
 * @property int|null $sysem
 * @property int|null $program
 * @property int|null $fee
 * @property float|null $amount
 * @property string|null $type
 * @property string|null $status
 *
 * @package App\Models
 */
class TFeeGsAdjustment extends Model
{
	protected $table = 't_fee_gs_adjustment';
	public $timestamps = false;

	protected $casts = [
		'sysem' => 'int',
		'program' => 'int',
		'fee' => 'int',
		'amount' => 'float'
	];

	protected $fillable = [
		'sysem',
		'program',
		'fee',
		'amount',
		'type',
		'status'
	];
}

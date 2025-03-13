<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TFeeMiscellaneou
 * 
 * @property int $id
 * @property int|null $sysem
 * @property int|null $program
 * @property int|null $fee
 * @property float|null $amount
 * @property string|null $status
 * @property int|null $subject
 *
 * @package App\Models
 */
class TFeeMiscellaneou extends Model
{
	protected $table = 't_fee_miscellaneous';
	public $timestamps = false;

	protected $casts = [
		'sysem' => 'int',
		'program' => 'int',
		'fee' => 'int',
		'amount' => 'float',
		'subject' => 'int'
	];

	protected $fillable = [
		'sysem',
		'program',
		'fee',
		'amount',
		'status',
		'subject'
	];
}

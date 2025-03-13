<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TFeeMandatory
 * 
 * @property int $ID
 * @property int $SY_SEM
 * @property int $FEE
 * @property float $AMOUNT
 * @property string|null $STATUS
 * 
 * @property TSySem $t_sy_sem
 * @property RFee $r_fee
 *
 * @package App\Models
 */
class TFeeMandatory extends Model
{
	protected $table = 't_fee_mandatory';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY_SEM' => 'int',
		'FEE' => 'int',
		'AMOUNT' => 'float'
	];

	protected $fillable = [
		'SY_SEM',
		'FEE',
		'AMOUNT',
		'STATUS'
	];

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SY_SEM');
	}

	public function r_fee()
	{
		return $this->belongsTo(RFee::class, 'FEE');
	}
}

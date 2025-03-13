<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TFeeSubject
 * 
 * @property int $ID
 * @property int $SY_SEM
 * @property int $FEE
 * @property int $SUBJECT
 * @property float $AMOUNT
 * @property string|null $STATUS
 * @property int|null $YR_LVL
 * 
 * @property TSySem $t_sy_sem
 * @property RFee $r_fee
 * @property RSubject $r_subject
 *
 * @package App\Models
 */
class TFeeSubject extends Model
{
	protected $table = 't_fee_subject';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY_SEM' => 'int',
		'FEE' => 'int',
		'SUBJECT' => 'int',
		'AMOUNT' => 'float',
		'YR_LVL' => 'int'
	];

	protected $fillable = [
		'SY_SEM',
		'FEE',
		'SUBJECT',
		'AMOUNT',
		'STATUS',
		'YR_LVL'
	];

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SY_SEM');
	}

	public function r_fee()
	{
		return $this->belongsTo(RFee::class, 'FEE');
	}

	public function r_subject()
	{
		return $this->belongsTo(RSubject::class, 'SUBJECT');
	}
}

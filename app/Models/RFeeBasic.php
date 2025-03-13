<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RFeeBasic
 * 
 * @property int $ID
 * @property string|null $FEE_TYPE
 * @property string|null $CODE
 * @property string|null $DESCRIPTION
 * @property string|null $IS_MANDATORY
 * @property int|null $PRIORITY_LVL
 * @property Carbon|null $EFFECTIVITY_DATE
 * @property float|null $AMOUNT
 * @property string|null $STATUS
 * 
 * @property Collection|TFeeBasic[] $t_fee_basics
 * @property Collection|TFeeBasicAdjustment[] $t_fee_basic_adjustments
 *
 * @package App\Models
 */
class RFeeBasic extends Model
{
	protected $table = 'r_fee_basic';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'PRIORITY_LVL' => 'int',
		'EFFECTIVITY_DATE' => 'datetime',
		'AMOUNT' => 'float'
	];

	protected $fillable = [
		'FEE_TYPE',
		'CODE',
		'DESCRIPTION',
		'IS_MANDATORY',
		'PRIORITY_LVL',
		'EFFECTIVITY_DATE',
		'AMOUNT',
		'STATUS'
	];

	public function t_fee_basics()
	{
		return $this->hasMany(TFeeBasic::class, 'FEE_ID');
	}

	public function t_fee_basic_adjustments()
	{
		return $this->hasMany(TFeeBasicAdjustment::class, 'FEE_ID');
	}
}

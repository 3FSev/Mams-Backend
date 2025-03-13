<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TFeeBasic
 * 
 * @property int $ID
 * @property string|null $FEE_TYPE
 * @property int|null $FEE_ID
 * @property float|null $AMOUNT
 * @property int|null $GRADE_LVL
 * @property int|null $SY
 * @property int|null $SYSEM
 * @property int|null $TRACK
 * @property int|null $STRAND
 * @property string|null $CLASS_TYPE
 * @property string|null $PROGRAM_TYPE
 * @property string|null $STATUS
 * @property int|null $CAMPUS
 * 
 * @property RFeeBasic|null $r_fee_basic
 * @property RSy|null $r_sy
 * @property TSySem|null $t_sy_sem
 * @property RTrack|null $r_track
 *
 * @package App\Models
 */
class TFeeBasic extends Model
{
	protected $table = 't_fee_basic';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'FEE_ID' => 'int',
		'AMOUNT' => 'float',
		'GRADE_LVL' => 'int',
		'SY' => 'int',
		'SYSEM' => 'int',
		'TRACK' => 'int',
		'STRAND' => 'int',
		'CAMPUS' => 'int'
	];

	protected $fillable = [
		'FEE_TYPE',
		'FEE_ID',
		'AMOUNT',
		'GRADE_LVL',
		'SY',
		'SYSEM',
		'TRACK',
		'STRAND',
		'CLASS_TYPE',
		'PROGRAM_TYPE',
		'STATUS',
		'CAMPUS'
	];

	public function r_fee_basic()
	{
		return $this->belongsTo(RFeeBasic::class, 'FEE_ID');
	}

	public function r_sy()
	{
		return $this->belongsTo(RSy::class, 'SY');
	}

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SYSEM');
	}

	public function r_track()
	{
		return $this->belongsTo(RTrack::class, 'TRACK');
	}
}

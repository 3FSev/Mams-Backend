<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TFeeRoom
 * 
 * @property int $ID
 * @property int $SY_SEM
 * @property int $FEE
 * @property int $ROOM
 * @property float $AMOUNT
 * @property string|null $STATUS
 * 
 * @property TSySem $t_sy_sem
 * @property RFee $r_fee
 * @property RRoom $r_room
 *
 * @package App\Models
 */
class TFeeRoom extends Model
{
	protected $table = 't_fee_room';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY_SEM' => 'int',
		'FEE' => 'int',
		'ROOM' => 'int',
		'AMOUNT' => 'float'
	];

	protected $fillable = [
		'SY_SEM',
		'FEE',
		'ROOM',
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

	public function r_room()
	{
		return $this->belongsTo(RRoom::class, 'ROOM');
	}
}

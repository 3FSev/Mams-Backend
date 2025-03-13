<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TCompreFee
 * 
 * @property int $ID
 * @property int $PROGRAM
 * @property int $SY_SEM
 * @property float $AMOUNT
 * 
 * @property RCourse $r_course
 * @property TSySem $t_sy_sem
 *
 * @package App\Models
 */
class TCompreFee extends Model
{
	protected $table = 't_compre_fee';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'PROGRAM' => 'int',
		'SY_SEM' => 'int',
		'AMOUNT' => 'float'
	];

	protected $fillable = [
		'PROGRAM',
		'SY_SEM',
		'AMOUNT'
	];

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'PROGRAM');
	}

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SY_SEM');
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RGradingEquivalentBasic
 * 
 * @property int $ID
 * @property string|null $REMARKS
 * @property float|null $RANGEFROM
 * @property float|null $RANGETO
 * @property string|null $EQUIVALENT
 * @property string|null $STATUS
 *
 * @package App\Models
 */
class RGradingEquivalentBasic extends Model
{
	protected $table = 'r_grading_equivalent_basic';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'RANGEFROM' => 'float',
		'RANGETO' => 'float'
	];

	protected $fillable = [
		'REMARKS',
		'RANGEFROM',
		'RANGETO',
		'EQUIVALENT',
		'STATUS'
	];
}

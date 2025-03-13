<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TDiscount
 * 
 * @property int $ID
 * @property int $DISCOUNT
 * @property float|null $TF_FIXED
 * @property float|null $TF_PERCENT
 * @property float|null $BASIC_FIXED
 * @property float|null $BASIC_PERCENT
 * @property float|null $LAB_FIXED
 * @property float|null $LAB_PERCENT
 * @property float|null $MISC_FIXED
 * @property float|null $MISC_PERCENT
 * @property float|null $OTHER_FIXED
 * @property float|null $OTHER_PERCENT
 * @property float|null $TOTAL_FIXED
 * @property float|null $TOTAL_PERCENT
 * @property string|null $STATUS
 * 
 * @property RDiscount $r_discount
 *
 * @package App\Models
 */
class TDiscount extends Model
{
	protected $table = 't_discount';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'DISCOUNT' => 'int',
		'TF_FIXED' => 'float',
		'TF_PERCENT' => 'float',
		'BASIC_FIXED' => 'float',
		'BASIC_PERCENT' => 'float',
		'LAB_FIXED' => 'float',
		'LAB_PERCENT' => 'float',
		'MISC_FIXED' => 'float',
		'MISC_PERCENT' => 'float',
		'OTHER_FIXED' => 'float',
		'OTHER_PERCENT' => 'float',
		'TOTAL_FIXED' => 'float',
		'TOTAL_PERCENT' => 'float'
	];

	protected $fillable = [
		'DISCOUNT',
		'TF_FIXED',
		'TF_PERCENT',
		'BASIC_FIXED',
		'BASIC_PERCENT',
		'LAB_FIXED',
		'LAB_PERCENT',
		'MISC_FIXED',
		'MISC_PERCENT',
		'OTHER_FIXED',
		'OTHER_PERCENT',
		'TOTAL_FIXED',
		'TOTAL_PERCENT',
		'STATUS'
	];

	public function r_discount()
	{
		return $this->belongsTo(RDiscount::class, 'DISCOUNT');
	}
}

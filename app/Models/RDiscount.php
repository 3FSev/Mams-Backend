<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RDiscount
 * 
 * @property int $ID
 * @property string $CODE
 * @property string $DESCRIPTION
 * @property string|null $TYPE
 * 
 * @property Collection|TDiscount[] $t_discounts
 *
 * @package App\Models
 */
class RDiscount extends Model
{
	protected $table = 'r_discount';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'CODE',
		'DESCRIPTION',
		'TYPE'
	];

	public function t_discounts()
	{
		return $this->hasMany(TDiscount::class, 'DISCOUNT');
	}
}

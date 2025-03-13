<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MCriteriaList
 * 
 * @property int $id
 * @property string $criteria
 * @property int $order_by
 *
 * @package App\Models
 */
class MCriteriaList extends Model
{
	protected $table = 'm_criteria_list';
	public $timestamps = false;

	protected $casts = [
		'order_by' => 'int'
	];

	protected $fillable = [
		'criteria',
		'order_by'
	];
}

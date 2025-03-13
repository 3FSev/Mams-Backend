<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RChartOfAccount
 * 
 * @property int $id
 * @property string|null $description
 * @property string|null $for_cashier
 * @property string|null $status
 *
 * @package App\Models
 */
class RChartOfAccount extends Model
{
	protected $table = 'r_chart_of_accounts';
	public $timestamps = false;

	protected $fillable = [
		'description',
		'for_cashier',
		'status'
	];
}

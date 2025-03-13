<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RCounter
 * 
 * @property int $id
 * @property string|null $description
 * @property string|null $status
 *
 * @package App\Models
 */
class RCounter extends Model
{
	protected $table = 'r_counter';
	public $timestamps = false;

	protected $fillable = [
		'description',
		'status'
	];
}

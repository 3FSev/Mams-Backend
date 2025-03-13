<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RScholarship
 * 
 * @property int $id
 * @property string|null $code
 * @property string|null $description
 * @property string|null $status
 *
 * @package App\Models
 */
class RScholarship extends Model
{
	protected $table = 'r_scholarship';
	public $timestamps = false;

	protected $fillable = [
		'code',
		'description',
		'status'
	];
}

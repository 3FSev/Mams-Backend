<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserProfile
 * 
 * @property int $ID
 * @property int $USER
 * @property string $STATUS
 * @property Carbon $DATE_REQUEST
 *
 * @package App\Models
 */
class RUserProfile extends Model
{
	protected $table = 'r_user_profile';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER' => 'int',
		'DATE_REQUEST' => 'datetime'
	];

	protected $fillable = [
		'USER',
		'STATUS',
		'DATE_REQUEST'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserMembership
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $POSITION
 * @property string|null $ORGANIZATION
 * @property string|null $LEVEL
 * @property Carbon|null $DATE
 *
 * @package App\Models
 */
class RUserMembership extends Model
{
	protected $table = 'r_user_membership';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'DATE' => 'datetime'
	];

	protected $fillable = [
		'USER_PROFILE',
		'POSITION',
		'ORGANIZATION',
		'LEVEL',
		'DATE'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserSeminarsAttended
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $ACTIVITY
 * @property string|null $NATURE_INVOLVEMENT
 * @property string|null $SPONSOR
 * @property string|null $VENUE
 * @property string|null $LEVEL
 * @property Carbon|null $DATE
 *
 * @package App\Models
 */
class RUserSeminarsAttended extends Model
{
	protected $table = 'r_user_seminars_attended';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'DATE' => 'datetime'
	];

	protected $fillable = [
		'USER_PROFILE',
		'ACTIVITY',
		'NATURE_INVOLVEMENT',
		'SPONSOR',
		'VENUE',
		'LEVEL',
		'DATE'
	];
}

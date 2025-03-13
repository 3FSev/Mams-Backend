<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserAchievement
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $AWARD
 * @property string|null $AGENCY
 * @property Carbon|null $DATE
 *
 * @package App\Models
 */
class RUserAchievement extends Model
{
	protected $table = 'r_user_achievement';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'DATE' => 'datetime'
	];

	protected $fillable = [
		'USER_PROFILE',
		'AWARD',
		'AGENCY',
		'DATE'
	];
}

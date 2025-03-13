<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserCreativeActivity
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $TITLE
 * @property string|null $NATURE
 * @property string|null $VENUE
 * @property Carbon|null $DATE
 *
 * @package App\Models
 */
class RUserCreativeActivity extends Model
{
	protected $table = 'r_user_creative_activity';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'DATE' => 'datetime'
	];

	protected $fillable = [
		'USER_PROFILE',
		'TITLE',
		'NATURE',
		'VENUE',
		'DATE'
	];
}

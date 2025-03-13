<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserLicensurePassed
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $EXAMINATION
 * @property string|null $TITLE
 * @property Carbon|null $DATE_PASSED
 *
 * @package App\Models
 */
class RUserLicensurePassed extends Model
{
	protected $table = 'r_user_licensure_passed';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'DATE_PASSED' => 'datetime'
	];

	protected $fillable = [
		'USER_PROFILE',
		'EXAMINATION',
		'TITLE',
		'DATE_PASSED'
	];
}

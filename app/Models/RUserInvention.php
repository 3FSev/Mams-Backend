<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserInvention
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $NAME
 * @property Carbon|null $DATE_ISSUE
 * @property string|null $DEVELOPMENT
 * @property string|null $SERVICE
 * @property string|null $END_PRODUCT
 * @property string|null $COMMERCIAL_PRODUCT
 * @property string|null $COPYRIGHT_REGISTERED
 *
 * @package App\Models
 */
class RUserInvention extends Model
{
	protected $table = 'r_user_invention';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'DATE_ISSUE' => 'datetime'
	];

	protected $fillable = [
		'USER_PROFILE',
		'NAME',
		'DATE_ISSUE',
		'DEVELOPMENT',
		'SERVICE',
		'END_PRODUCT',
		'COMMERCIAL_PRODUCT',
		'COPYRIGHT_REGISTERED'
	];
}

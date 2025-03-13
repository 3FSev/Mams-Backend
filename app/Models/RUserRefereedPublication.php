<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserRefereedPublication
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $TITLE
 * @property string|null $EDITORS
 * @property string|null $TITLE_BOOK
 * @property string|null $ISSUE
 * @property string|null $LEVEL
 * @property Carbon|null $DATE_PUBLICATION
 *
 * @package App\Models
 */
class RUserRefereedPublication extends Model
{
	protected $table = 'r_user_refereed_publication';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'DATE_PUBLICATION' => 'datetime'
	];

	protected $fillable = [
		'USER_PROFILE',
		'TITLE',
		'EDITORS',
		'TITLE_BOOK',
		'ISSUE',
		'LEVEL',
		'DATE_PUBLICATION'
	];
}

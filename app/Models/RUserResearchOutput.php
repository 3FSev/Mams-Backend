<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserResearchOutput
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $TITLE
 * @property string|null $AUTHORS
 * @property string|null $TITLE_BOOK
 * @property int|null $PAGE_NO
 * @property string|null $PLACE_PUBLISHED
 * @property string|null $PUBLISHER
 * @property Carbon|null $DATE_PUBLISHED
 *
 * @package App\Models
 */
class RUserResearchOutput extends Model
{
	protected $table = 'r_user_research_output';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'PAGE_NO' => 'int',
		'DATE_PUBLISHED' => 'datetime'
	];

	protected $fillable = [
		'USER_PROFILE',
		'TITLE',
		'AUTHORS',
		'TITLE_BOOK',
		'PAGE_NO',
		'PLACE_PUBLISHED',
		'PUBLISHER',
		'DATE_PUBLISHED'
	];
}

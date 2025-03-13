<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TScholarship
 * 
 * @property int $ID
 * @property int|null $STUDENT_ID
 * @property int|null $SCHOLAR_ID
 * @property string|null $OTHER
 * @property Carbon|null $DATE_SUBMITTED
 * @property int|null $USERID
 * @property string|null $STATUS
 * @property int|null $EDITED_BY
 * @property Carbon|null $EDITED_DATE
 * @property string|null $AWARD_NO
 *
 * @package App\Models
 */
class TScholarship extends Model
{
	protected $table = 't_scholarship';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUDENT_ID' => 'int',
		'SCHOLAR_ID' => 'int',
		'DATE_SUBMITTED' => 'datetime',
		'USERID' => 'int',
		'EDITED_BY' => 'int',
		'EDITED_DATE' => 'datetime'
	];

	protected $fillable = [
		'STUDENT_ID',
		'SCHOLAR_ID',
		'OTHER',
		'DATE_SUBMITTED',
		'USERID',
		'STATUS',
		'EDITED_BY',
		'EDITED_DATE',
		'AWARD_NO'
	];
}

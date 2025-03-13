<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TDeficiencyBe
 * 
 * @property int $ID
 * @property int|null $STUDENT_ID
 * @property string|null $DEFICIENCY
 * @property string|null $REGISTRATION
 * @property string|null $GRADES
 * @property string|null $CURRICULUM
 * @property Carbon $DATE_SUBMITTED
 * @property int|null $USERID
 * @property string|null $STATUS
 * @property int|null $EDITED_BY
 *
 * @package App\Models
 */
class TDeficiencyBe extends Model
{
	protected $table = 't_deficiency_be';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUDENT_ID' => 'int',
		'DATE_SUBMITTED' => 'datetime',
		'USERID' => 'int',
		'EDITED_BY' => 'int'
	];

	protected $fillable = [
		'STUDENT_ID',
		'DEFICIENCY',
		'REGISTRATION',
		'GRADES',
		'CURRICULUM',
		'DATE_SUBMITTED',
		'USERID',
		'STATUS',
		'EDITED_BY'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TGeneralClearanceApproval
 * 
 * @property int $ID
 * @property string|null $OFFICE
 * @property int|null $SIGNATORY
 * @property int|null $STUDENT
 * @property int|null $CURRICULUM
 * @property int|null $CLEARED
 * @property int|null $STATUS
 * @property Carbon $DATE_ADDED
 * @property int|null $ADDED_BY
 * @property Carbon|null $DATE_UPDATED
 * @property int|null $UPDATED_BY
 * @property string|null $remarks
 *
 * @package App\Models
 */
class TGeneralClearanceApproval extends Model
{
	protected $table = 't_general_clearance_approval';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SIGNATORY' => 'int',
		'STUDENT' => 'int',
		'CURRICULUM' => 'int',
		'CLEARED' => 'int',
		'STATUS' => 'int',
		'DATE_ADDED' => 'datetime',
		'ADDED_BY' => 'int',
		'DATE_UPDATED' => 'datetime',
		'UPDATED_BY' => 'int'
	];

	protected $fillable = [
		'OFFICE',
		'SIGNATORY',
		'STUDENT',
		'CURRICULUM',
		'CLEARED',
		'STATUS',
		'DATE_ADDED',
		'ADDED_BY',
		'DATE_UPDATED',
		'UPDATED_BY',
		'remarks'
	];
}

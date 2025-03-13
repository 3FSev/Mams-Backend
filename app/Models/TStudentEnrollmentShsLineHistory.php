<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentEnrollmentShsLineHistory
 * 
 * @property int $ID
 * @property int|null $ENROLLMENT_ID
 * @property int|null $SECTION_OFFERING_SUBJECT
 * @property Carbon|null $DATE_ENROLLED
 * @property int|null $ENROLLED_BY
 * @property string|null $ADJUSTMENT_STATUS
 *
 * @package App\Models
 */
class TStudentEnrollmentShsLineHistory extends Model
{
	protected $table = 't_student_enrollment_shs_line_history';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ENROLLMENT_ID' => 'int',
		'SECTION_OFFERING_SUBJECT' => 'int',
		'DATE_ENROLLED' => 'datetime',
		'ENROLLED_BY' => 'int'
	];

	protected $fillable = [
		'ENROLLMENT_ID',
		'SECTION_OFFERING_SUBJECT',
		'DATE_ENROLLED',
		'ENROLLED_BY',
		'ADJUSTMENT_STATUS'
	];
}

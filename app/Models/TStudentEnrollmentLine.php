<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentEnrollmentLine
 * 
 * @property int $ID
 * @property int|null $ENROLLMENT_ID
 * @property int|null $SECTION_OFFERING_LINE
 * @property int|null $NO_OF_TUITION_HRS
 * @property Carbon|null $DATE_ENROLLED
 * @property string|null $STATUS
 * @property int|null $OPEN_SECTION_OFFERING
 * @property string|null $ADJUSTMENT_STATUS
 * @property int|null $FACULTY_ENROLLED
 * 
 * @property TStudentEnrollment|null $t_student_enrollment
 * @property TSectionOfferingSubject|null $t_section_offering_subject
 *
 * @package App\Models
 */
class TStudentEnrollmentLine extends Model
{
	protected $table = 't_student_enrollment_line';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ENROLLMENT_ID' => 'int',
		'SECTION_OFFERING_LINE' => 'int',
		'NO_OF_TUITION_HRS' => 'int',
		'DATE_ENROLLED' => 'datetime',
		'OPEN_SECTION_OFFERING' => 'int',
		'FACULTY_ENROLLED' => 'int'
	];

	protected $fillable = [
		'ENROLLMENT_ID',
		'SECTION_OFFERING_LINE',
		'NO_OF_TUITION_HRS',
		'DATE_ENROLLED',
		'STATUS',
		'OPEN_SECTION_OFFERING',
		'ADJUSTMENT_STATUS',
		'FACULTY_ENROLLED'
	];

	public function t_student_enrollment()
	{
		return $this->belongsTo(TStudentEnrollment::class, 'ENROLLMENT_ID');
	}

	public function t_section_offering_subject()
	{
		return $this->belongsTo(TSectionOfferingSubject::class, 'SECTION_OFFERING_LINE');
	}
}

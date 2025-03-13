<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentEnrollmentShsLine
 * 
 * @property int $ID
 * @property int|null $ENROLLMENT_ID
 * @property int|null $SECTION_OFFERING_SUBJECT
 * @property Carbon|null $DATE_ENROLLED
 * @property int|null $ENROLLED_BY
 * @property string|null $ADJUSTMENT_STATUS
 * 
 * @property TStudentEnrollmentSh|null $t_student_enrollment_sh
 * @property TSectionOfferingShsSubject|null $t_section_offering_shs_subject
 *
 * @package App\Models
 */
class TStudentEnrollmentShsLine extends Model
{
	protected $table = 't_student_enrollment_shs_line';
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

	public function t_student_enrollment_sh()
	{
		return $this->belongsTo(TStudentEnrollmentSh::class, 'ENROLLMENT_ID');
	}

	public function t_section_offering_shs_subject()
	{
		return $this->belongsTo(TSectionOfferingShsSubject::class, 'SECTION_OFFERING_SUBJECT');
	}
}

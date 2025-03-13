<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RMedical
 * 
 * @property int $ID
 * @property int|null $APPLICANTID
 * @property int|null $MEDICAL_EXAMINATION
 * @property string|null $RESULT
 * @property string|null $REMARKS
 * 
 * @property TApplicant|null $t_applicant
 * @property RMedicalExamination|null $r_medical_examination
 *
 * @package App\Models
 */
class RMedical extends Model
{
	protected $table = 'r_medical';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'APPLICANTID' => 'int',
		'MEDICAL_EXAMINATION' => 'int'
	];

	protected $fillable = [
		'APPLICANTID',
		'MEDICAL_EXAMINATION',
		'RESULT',
		'REMARKS'
	];

	public function t_applicant()
	{
		return $this->belongsTo(TApplicant::class, 'APPLICANTID');
	}

	public function r_medical_examination()
	{
		return $this->belongsTo(RMedicalExamination::class, 'MEDICAL_EXAMINATION');
	}
}

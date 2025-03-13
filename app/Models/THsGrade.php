<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class THsGrade
 * 
 * @property int $ID
 * @property int|null $APPLICANTID
 * @property int|null $HS_SUBJECT
 * @property float|null $GRADE
 * 
 * @property TApplicant|null $t_applicant
 * @property RHsSubject|null $r_hs_subject
 *
 * @package App\Models
 */
class THsGrade extends Model
{
	protected $table = 't_hs_grade';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'APPLICANTID' => 'int',
		'HS_SUBJECT' => 'int',
		'GRADE' => 'float'
	];

	protected $fillable = [
		'APPLICANTID',
		'HS_SUBJECT',
		'GRADE'
	];

	public function t_applicant()
	{
		return $this->belongsTo(TApplicant::class, 'APPLICANTID');
	}

	public function r_hs_subject()
	{
		return $this->belongsTo(RHsSubject::class, 'HS_SUBJECT');
	}
}

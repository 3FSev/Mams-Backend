<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TEptGrade
 * 
 * @property int $ID
 * @property int|null $APPLICANTID
 * @property float|null $GRADE
 * @property string|null $RESULT
 * 
 * @property TApplicant|null $t_applicant
 *
 * @package App\Models
 */
class TEptGrade extends Model
{
	protected $table = 't_ept_grade';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'APPLICANTID' => 'int',
		'GRADE' => 'float'
	];

	protected $fillable = [
		'APPLICANTID',
		'GRADE',
		'RESULT'
	];

	public function t_applicant()
	{
		return $this->belongsTo(TApplicant::class, 'APPLICANTID');
	}
}

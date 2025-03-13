<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TGmat
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
class TGmat extends Model
{
	protected $table = 't_gmat';
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

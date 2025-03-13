<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RMedicalExamination
 * 
 * @property int $ID
 * @property string|null $MEDICAL_EXAM
 * 
 * @property Collection|RMedical[] $r_medicals
 *
 * @package App\Models
 */
class RMedicalExamination extends Model
{
	protected $table = 'r_medical_examination';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'MEDICAL_EXAM'
	];

	public function r_medicals()
	{
		return $this->hasMany(RMedical::class, 'MEDICAL_EXAMINATION');
	}
}

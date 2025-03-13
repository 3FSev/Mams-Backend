<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RHsSubject
 * 
 * @property int $ID
 * @property string|null $SUBJECT
 * @property float|null $PASSING_GRADE
 * 
 * @property Collection|THsGrade[] $t_hs_grades
 *
 * @package App\Models
 */
class RHsSubject extends Model
{
	protected $table = 'r_hs_subject';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'PASSING_GRADE' => 'float'
	];

	protected $fillable = [
		'SUBJECT',
		'PASSING_GRADE'
	];

	public function t_hs_grades()
	{
		return $this->hasMany(THsGrade::class, 'HS_SUBJECT');
	}
}

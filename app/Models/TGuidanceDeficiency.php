<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TGuidanceDeficiency
 * 
 * @property int $ID
 * @property int|null $STUDENT_ID
 * @property string|null $REMARKS
 * @property int|null $SY_SEM
 * @property string|null $STATUS
 * 
 * @property TStudent|null $t_student
 *
 * @package App\Models
 */
class TGuidanceDeficiency extends Model
{
	protected $table = 't_guidance_deficiency';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUDENT_ID' => 'int',
		'SY_SEM' => 'int'
	];

	protected $fillable = [
		'STUDENT_ID',
		'REMARKS',
		'SY_SEM',
		'STATUS'
	];

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT_ID');
	}
}

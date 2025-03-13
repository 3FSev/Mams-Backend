<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RStudentNo
 * 
 * @property int $ID
 * @property int|null $CAMPUS
 * @property int|null $SY
 * @property int|null $RUNNING_NO
 *
 * @package App\Models
 */
class RStudentNo extends Model
{
	protected $table = 'r_student_no';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'CAMPUS' => 'int',
		'SY' => 'int',
		'RUNNING_NO' => 'int'
	];

	protected $fillable = [
		'CAMPUS',
		'SY',
		'RUNNING_NO'
	];
}

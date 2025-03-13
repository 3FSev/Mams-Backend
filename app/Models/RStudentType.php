<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RStudentType
 * 
 * @property int $ID
 * @property string $DESCRIPTION
 *
 * @package App\Models
 */
class RStudentType extends Model
{
	protected $table = 'r_student_type';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'DESCRIPTION'
	];
}

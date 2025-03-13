<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RCourseCategory
 * 
 * @property int $ID
 * @property string $CODE
 * @property string|null $DESCRIPTION
 *
 * @package App\Models
 */
class RCourseCategory extends Model
{
	protected $table = 'r_course_category';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'CODE',
		'DESCRIPTION'
	];
}

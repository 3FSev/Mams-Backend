<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VMessage
 * 
 * @property int|null $id
 * @property string|null $student_no
 * @property string|null $username
 * @property string $DEPT
 *
 * @package App\Models
 */
class VMessage extends Model
{
	protected $table = 'v_messages';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
		'student_no',
		'username',
		'DEPT'
	];
}

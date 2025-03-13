<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UAccessControl
 * 
 * @property int $USER_ID
 * @property int $FUNCTION_ID
 * @property string|null $ACCESS
 *
 * @package App\Models
 */
class UAccessControl extends Model
{
	protected $table = 'u_access_control';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'USER_ID' => 'int',
		'FUNCTION_ID' => 'int'
	];

	protected $fillable = [
		'ACCESS'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UFunction
 * 
 * @property int $ID
 * @property string $CONTROLLER
 * @property string $FUNCTION
 * @property string $NAVIGATION_NAME
 * @property string $USER_TYPE
 * @property string|null $TCODE
 * @property string|null $NAVIGATION_PARENT
 *
 * @package App\Models
 */
class UFunction extends Model
{
	protected $table = 'u_function';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'CONTROLLER',
		'FUNCTION',
		'NAVIGATION_NAME',
		'USER_TYPE',
		'TCODE',
		'NAVIGATION_PARENT'
	];
}

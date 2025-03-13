<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MUser
 * 
 * @property int|null $id
 * @property int|null $userid
 * @property string|null $u_name
 * @property string|null $username
 *
 * @package App\Models
 */
class MUser extends Model
{
	protected $table = 'm_user';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'userid' => 'int'
	];

	protected $fillable = [
		'id',
		'userid',
		'u_name',
		'username'
	];
}

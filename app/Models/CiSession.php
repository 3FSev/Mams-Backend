<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CiSession
 * 
 * @property string|null $session_id
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property int|null $last_activity
 * @property string|null $user_data
 *
 * @package App\Models
 */
class CiSession extends Model
{
	protected $table = 'ci_sessions';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'last_activity' => 'int'
	];

	protected $fillable = [
		'session_id',
		'ip_address',
		'user_agent',
		'last_activity',
		'user_data'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RAccount
 * 
 * @property int|null $userid
 * @property string|null $username
 * @property string|null $password
 * @property string|null $status
 * @property Carbon $date_registered
 * @property string|null $usertype
 * @property string|null $default_pass
 * 
 * @property RUser|null $r_user
 *
 * @package App\Models
 */
class RAccount extends Model
{
	protected $table = 'r_account';
	public $incrementing = false;
	public $timestamps = false;

	protected $primaryKey = 'userid';

	protected $casts = [
		'userid' => 'int',
		'date_registered' => 'datetime'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'userid',
		'username',
		'password',
		'status',
		'date_registered',
		'usertype',
		'default_pass'
	];

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'userid');
	}
}

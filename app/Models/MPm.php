<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MPm
 * 
 * @property int $id
 * @property int $id2
 * @property string $title
 * @property int $user1
 * @property int $user2
 * @property string $message
 * @property int $timestamp
 * @property string $user1read
 * @property string $user2read
 * @property string|null $ipaddress
 * @property int|null $user3
 *
 * @package App\Models
 */
class MPm extends Model
{
	protected $table = 'm_pm';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'id2' => 'int',
		'user1' => 'int',
		'user2' => 'int',
		'timestamp' => 'int',
		'user3' => 'int'
	];

	protected $fillable = [
		'id',
		'id2',
		'title',
		'user1',
		'user2',
		'message',
		'timestamp',
		'user1read',
		'user2read',
		'ipaddress',
		'user3'
	];
}

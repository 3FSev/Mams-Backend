<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RRoomCourse
 * 
 * @property int $ID
 * @property int $ROOM
 * @property int $COURSE
 * 
 * @property RRoom $r_room
 * @property RCourse $r_course
 *
 * @package App\Models
 */
class RRoomCourse extends Model
{
	protected $table = 'r_room_course';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ROOM' => 'int',
		'COURSE' => 'int'
	];

	protected $fillable = [
		'ROOM',
		'COURSE'
	];

	public function r_room()
	{
		return $this->belongsTo(RRoom::class, 'ROOM');
	}

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'COURSE');
	}
}

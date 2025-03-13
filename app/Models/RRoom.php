<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RRoom
 * 
 * @property int $ID
 * @property string $CODE
 * @property string $DESCRIPTION
 * @property int|null $BUILDING
 * @property string $EXCLUDE_CONFLICT
 * @property string $IS_AIRCONDITIONED
 * @property int $NO_OF_STUDENTS
 * @property int $FLOOR
 * @property string $STATUS
 * 
 * @property RBuilding|null $r_building
 * @property Collection|RRoomCourse[] $r_room_courses
 * @property Collection|TAdjustmentFee[] $t_adjustment_fees
 * @property Collection|TFeeRoom[] $t_fee_rooms
 * @property Collection|TSectionOfferingElemSubjectLine[] $t_section_offering_elem_subject_lines
 * @property Collection|TSectionOfferingShsSubjectLine[] $t_section_offering_shs_subject_lines
 * @property Collection|TSectionOfferingSubjectLine[] $t_section_offering_subject_lines
 *
 * @package App\Models
 */
class RRoom extends Model
{
	protected $table = 'r_room';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'BUILDING' => 'int',
		'NO_OF_STUDENTS' => 'int',
		'FLOOR' => 'int'
	];

	protected $fillable = [
		'CODE',
		'DESCRIPTION',
		'BUILDING',
		'EXCLUDE_CONFLICT',
		'IS_AIRCONDITIONED',
		'NO_OF_STUDENTS',
		'FLOOR',
		'STATUS'
	];

	public function r_building()
	{
		return $this->belongsTo(RBuilding::class, 'BUILDING');
	}

	public function r_room_courses()
	{
		return $this->hasMany(RRoomCourse::class, 'ROOM');
	}

	public function t_adjustment_fees()
	{
		return $this->hasMany(TAdjustmentFee::class, 'ROOM');
	}

	public function t_fee_rooms()
	{
		return $this->hasMany(TFeeRoom::class, 'ROOM');
	}

	public function t_section_offering_elem_subject_lines()
	{
		return $this->hasMany(TSectionOfferingElemSubjectLine::class, 'ROOM');
	}

	public function t_section_offering_shs_subject_lines()
	{
		return $this->hasMany(TSectionOfferingShsSubjectLine::class, 'ROOM');
	}

	public function t_section_offering_subject_lines()
	{
		return $this->hasMany(TSectionOfferingSubjectLine::class, 'ROOM');
	}

	public function courses()
	{
		return $this->hasManyThrough(
			RCourse::class,
			RRoomCourse::class,
			'ROOM',         // Foreign key on r_room_courses table
			'ID',           // Foreign key on courses table
			'ID',           // Local key on rooms table
			'COURSE'        // Local key on r_room_courses table that references courses
		);
	}
}

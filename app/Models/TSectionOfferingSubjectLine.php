<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TSectionOfferingSubjectLine
 * 
 * @property int $ID
 * @property int|null $SECTION_OFFERING_SUBJECT_ID
 * @property string|null $DAY
 * @property Carbon|null $TIME_START
 * @property Carbon|null $TIME_END
 * @property int|null $ROOM
 * @property string|null $TYPE
 * 
 * @property RRoom|null $r_room
 * @property TSectionOfferingSubject|null $t_section_offering_subject
 *
 * @package App\Models
 */
class TSectionOfferingSubjectLine extends Model
{
	protected $table = 't_section_offering_subject_line';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SECTION_OFFERING_SUBJECT_ID' => 'int',
		'TIME_START' => 'datetime',
		'TIME_END' => 'datetime',
		'ROOM' => 'int'
	];

	protected $fillable = [
		'SECTION_OFFERING_SUBJECT_ID',
		'DAY',
		'TIME_START',
		'TIME_END',
		'ROOM',
		'TYPE'
	];

	public function r_room()
	{
		return $this->belongsTo(RRoom::class, 'ROOM');
	}

	public function t_section_offering_subject()
	{
		return $this->belongsTo(TSectionOfferingSubject::class, 'SECTION_OFFERING_SUBJECT_ID');
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TSectionOfferingShsSubjectLine
 * 
 * @property int $ID
 * @property int|null $SECTION_OFFERING_SUBJECT
 * @property Carbon|null $TIME_START
 * @property Carbon|null $TIME_END
 * @property string|null $DAY
 * @property int|null $ROOM
 * 
 * @property TSectionOfferingShsSubject|null $t_section_offering_shs_subject
 * @property RRoom|null $r_room
 *
 * @package App\Models
 */
class TSectionOfferingShsSubjectLine extends Model
{
	protected $table = 't_section_offering_shs_subject_line';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SECTION_OFFERING_SUBJECT' => 'int',
		'TIME_START' => 'datetime',
		'TIME_END' => 'datetime',
		'ROOM' => 'int'
	];

	protected $fillable = [
		'SECTION_OFFERING_SUBJECT',
		'TIME_START',
		'TIME_END',
		'DAY',
		'ROOM'
	];

	public function t_section_offering_shs_subject()
	{
		return $this->belongsTo(TSectionOfferingShsSubject::class, 'SECTION_OFFERING_SUBJECT');
	}

	public function r_room()
	{
		return $this->belongsTo(RRoom::class, 'ROOM');
	}
}

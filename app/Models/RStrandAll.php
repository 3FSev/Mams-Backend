<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RStrandAll
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property string|null $DESCRIPTION
 * @property int|null $TRACK
 * 
 * @property RTrackAll|null $r_track_all
 *
 * @package App\Models
 */
class RStrandAll extends Model
{
	protected $table = 'r_strand_all';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'TRACK' => 'int'
	];

	protected $fillable = [
		'CODE',
		'DESCRIPTION',
		'TRACK'
	];

	public function r_track_all()
	{
		return $this->belongsTo(RTrackAll::class, 'TRACK');
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RTrackAll
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property string|null $DESCRIPTION
 * 
 * @property Collection|RStrandAll[] $r_strand_alls
 *
 * @package App\Models
 */
class RTrackAll extends Model
{
	protected $table = 'r_track_all';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'CODE',
		'DESCRIPTION'
	];

	public function r_strand_alls()
	{
		return $this->hasMany(RStrandAll::class, 'TRACK');
	}
}

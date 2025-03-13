<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RStrand
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property string|null $DESCRIPTION
 * @property int|null $TRACK
 * 
 * @property RTrack|null $r_track
 * @property Collection|RCurriculumSh[] $r_curriculum_shes
 *
 * @package App\Models
 */
class RStrand extends Model
{
	protected $table = 'r_strand';
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

	public function r_track()
	{
		return $this->belongsTo(RTrack::class, 'TRACK');
	}

	public function r_curriculum_shes()
	{
		return $this->hasMany(RCurriculumSh::class, 'STRAND');
	}
}

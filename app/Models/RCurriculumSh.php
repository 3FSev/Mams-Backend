<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculumSh
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property int|null $STRAND
 * @property int|null $TRACK
 * @property string|null $STATUS
 * 
 * @property RStrand|null $r_strand
 * @property RTrack|null $r_track
 * @property Collection|RCurriculumShsLine[] $r_curriculum_shs_lines
 * @property Collection|TSectionOfferingSh[] $t_section_offering_shes
 *
 * @package App\Models
 */
class RCurriculumSh extends Model
{
	protected $table = 'r_curriculum_shs';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STRAND' => 'int',
		'TRACK' => 'int'
	];

	protected $fillable = [
		'CODE',
		'STRAND',
		'TRACK',
		'STATUS'
	];

	public function r_strand()
	{
		return $this->belongsTo(RStrand::class, 'STRAND');
	}

	public function r_track()
	{
		return $this->belongsTo(RTrack::class, 'TRACK');
	}

	public function r_curriculum_shs_lines()
	{
		return $this->hasMany(RCurriculumShsLine::class, 'CURR_ID');
	}

	public function t_section_offering_shes()
	{
		return $this->hasMany(TSectionOfferingSh::class, 'CURRICULUM');
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RTrack
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property string|null $DESCRIPTION
 * 
 * @property Collection|RCurriculumSh[] $r_curriculum_shes
 * @property Collection|RStrand[] $r_strands
 * @property Collection|TFeeBasic[] $t_fee_basics
 * @property Collection|TFeeBasicAdjustment[] $t_fee_basic_adjustments
 *
 * @package App\Models
 */
class RTrack extends Model
{
	protected $table = 'r_track';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'CODE',
		'DESCRIPTION'
	];

	public function r_curriculum_shes()
	{
		return $this->hasMany(RCurriculumSh::class, 'TRACK');
	}

	public function r_strands()
	{
		return $this->hasMany(RStrand::class, 'TRACK');
	}

	public function t_fee_basics()
	{
		return $this->hasMany(TFeeBasic::class, 'TRACK');
	}

	public function t_fee_basic_adjustments()
	{
		return $this->hasMany(TFeeBasicAdjustment::class, 'TRACK');
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TSectionOfferingSh
 * 
 * @property int $ID
 * @property int|null $SECTION
 * @property int|null $GRADE_LVL
 * @property int|null $SYSEM
 * @property int|null $CURRICULUM
 * @property int|null $CAMPUS
 * 
 * @property RSectionBasic|null $r_section_basic
 * @property TSySem|null $t_sy_sem
 * @property RCurriculumSh|null $r_curriculum_sh
 * @property RCampus|null $r_campus
 * @property Collection|TSectionOfferingShsSubject[] $t_section_offering_shs_subjects
 *
 * @package App\Models
 */
class TSectionOfferingSh extends Model
{
	protected $table = 't_section_offering_shs';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SECTION' => 'int',
		'GRADE_LVL' => 'int',
		'SYSEM' => 'int',
		'CURRICULUM' => 'int',
		'CAMPUS' => 'int'
	];

	protected $fillable = [
		'SECTION',
		'GRADE_LVL',
		'SYSEM',
		'CURRICULUM',
		'CAMPUS'
	];

	public function r_section_basic()
	{
		return $this->belongsTo(RSectionBasic::class, 'SECTION');
	}

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SYSEM');
	}

	public function r_curriculum_sh()
	{
		return $this->belongsTo(RCurriculumSh::class, 'CURRICULUM');
	}

	public function r_campus()
	{
		return $this->belongsTo(RCampus::class, 'CAMPUS');
	}

	public function t_section_offering_shs_subjects()
	{
		return $this->hasMany(TSectionOfferingShsSubject::class, 'SECTION_OFFERING');
	}
}

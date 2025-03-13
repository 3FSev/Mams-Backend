<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RCampus
 * 
 * @property int $ID
 * @property string $CODE
 * @property string $NAME
 * @property string|null $ADDRESS
 * @property string|null $TELEPHONE
 * @property int|null $DIRECTOR
 * @property string|null $PROGRAM_TYPE
 * 
 * @property Collection|RBuilding[] $r_buildings
 * @property Collection|RCollege[] $r_colleges
 * @property Collection|RFacultyCampusAssignment[] $r_faculty_campus_assignments
 * @property Collection|RSystemConfigScheduleBasic[] $r_system_config_schedule_basics
 * @property Collection|RSystemConfigScheduleSh[] $r_system_config_schedule_shes
 * @property Collection|TApplicant[] $t_applicants
 * @property Collection|TSectionOfferingElem[] $t_section_offering_elems
 * @property Collection|TSectionOfferingSh[] $t_section_offering_shes
 *
 * @package App\Models
 */
class RCampus extends Model
{
	protected $table = 'r_campus';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'DIRECTOR' => 'int'
	];

	protected $fillable = [
		'CODE',
		'NAME',
		'ADDRESS',
		'TELEPHONE',
		'DIRECTOR',
		'PROGRAM_TYPE'
	];

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'DIRECTOR');
	}

	public function r_buildings()
	{
		return $this->hasMany(RBuilding::class, 'CAMPUS');
	}

	public function r_colleges()
	{
		return $this->hasMany(RCollege::class, 'CAMPUS');
	}

	public function r_faculty_campus_assignments()
	{
		return $this->hasMany(RFacultyCampusAssignment::class, 'campus');
	}

	public function r_system_config_schedule_basics()
	{
		return $this->hasMany(RSystemConfigScheduleBasic::class, 'CAMPUS');
	}

	public function r_system_config_schedule_shes()
	{
		return $this->hasMany(RSystemConfigScheduleSh::class, 'CAMPUS');
	}

	public function t_applicants()
	{
		return $this->hasMany(TApplicant::class, 'CAMPUS');
	}

	public function t_section_offering_elems()
	{
		return $this->hasMany(TSectionOfferingElem::class, 'CAMPUS');
	}

	public function t_section_offering_shes()
	{
		return $this->hasMany(TSectionOfferingSh::class, 'CAMPUS');
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculumElem
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property string|null $CLASS_TYPE
 * @property string|null $PROGRAM_TYPE
 * @property string|null $FLAG
 * 
 * @property Collection|RCurriculumElemLine[] $r_curriculum_elem_lines
 * @property Collection|TSectionOfferingElem[] $t_section_offering_elems
 *
 * @package App\Models
 */
class RCurriculumElem extends Model
{
	protected $table = 'r_curriculum_elem';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'CODE',
		'CLASS_TYPE',
		'PROGRAM_TYPE',
		'FLAG'
	];

	public function r_curriculum_elem_lines()
	{
		return $this->hasMany(RCurriculumElemLine::class, 'CURR_ID');
	}

	public function t_section_offering_elems()
	{
		return $this->hasMany(TSectionOfferingElem::class, 'CURRICULUM');
	}
}

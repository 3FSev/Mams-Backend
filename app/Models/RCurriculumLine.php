<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculumLine
 * 
 * @property int $ID
 * @property int $CURRICULUM_ID
 * @property int $SUBJECT
 * @property string $TERM
 * @property int $YR_LVL
 * @property string $ACADEMIC_TYPE
 * 
 * @property RCurriculum $r_curriculum
 * @property RSubject $r_subject
 * @property Collection|RCurriculumLineCoreq[] $r_curriculum_line_coreqs
 * @property Collection|RCurriculumLinePrereq[] $r_curriculum_line_prereqs
 *
 * @package App\Models
 */
class RCurriculumLine extends Model
{
	protected $table = 'r_curriculum_line';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'CURRICULUM_ID' => 'int',
		'SUBJECT' => 'int',
		'YR_LVL' => 'int'
	];

	protected $fillable = [
		'CURRICULUM_ID',
		'SUBJECT',
		'TERM',
		'YR_LVL',
		'ACADEMIC_TYPE'
	];

	public function r_curriculum()
	{
		return $this->belongsTo(RCurriculum::class, 'CURRICULUM_ID');
	}

	public function r_subject()
	{
		return $this->belongsTo(RSubject::class, 'SUBJECT');
	}

	public function r_curriculum_line_coreqs()
	{
		return $this->hasMany(RCurriculumLineCoreq::class, 'CURR_LINE_ID');
	}

	public function r_curriculum_line_prereqs()
	{
		return $this->hasMany(RCurriculumLinePrereq::class, 'CURR_LINE_ID');
	}
}

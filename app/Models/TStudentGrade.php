<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentGrade
 * 
 * @property int $ID
 * @property int|null $SOSID
 * @property int|null $SUBJECT_ID
 * @property string|null $FINALGRADE
 * @property string|null $REMARKS
 * @property int|null $STUDENT_ID
 * @property int|null $SYSEM
 * @property Carbon|null $LAST_UPDATED
 * @property string|null $OTHER_REMARKS
 * @property string|null $FINAL_RATING
 * @property int|null $ENCODED_BY
 * @property string|null $RECENT_GRADE
 * @property Carbon|null $GRADE_FINALIZED
 * @property string|null $POSTED
 * @property string|null $FINALIZED
 * @property int|null $ENROLLMENT_ID
 * @property int|null $YEAR_LEVEL
 * @property int|null $SY
 * @property string|null $SEM
 * @property string|null $PROGRAM_TYPE
 * @property int|null $FACULTY
 * @property int|null $tblid
 * @property string|null $IS_REMEDIAL
 * @property string|null $IS_PENALTY
 * @property string|null $UPDATED_BY
 * @property Carbon|null $DATE_UPDATED
 * @property string|null $OLD_GRADE
 * @property int|null $COURSE
 * @property Carbon|null $DATE_CREATED
 * @property int|null $old_subject_id
 * @property int|null $old_subj_updated_by
 * @property Carbon|null $old_subj_date_updated
 * @property string|null $IS_DR_OFFICIAL
 * 
 * @property RUser|null $r_user
 * @property TStudentEnrollment|null $t_student_enrollment
 * @property TStudentGradesLine $t_student_grades_line
 *
 * @package App\Models
 */
class TStudentGrade extends Model
{
	protected $table = 't_student_grades';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SOSID' => 'int',
		'SUBJECT_ID' => 'int',
		'STUDENT_ID' => 'int',
		'SYSEM' => 'int',
		'LAST_UPDATED' => 'datetime',
		'ENCODED_BY' => 'int',
		'GRADE_FINALIZED' => 'datetime',
		'ENROLLMENT_ID' => 'int',
		'YEAR_LEVEL' => 'int',
		'SY' => 'int',
		'FACULTY' => 'int',
		'tblid' => 'int',
		'DATE_UPDATED' => 'datetime',
		'COURSE' => 'int',
		'DATE_CREATED' => 'datetime',
		'old_subject_id' => 'int',
		'old_subj_updated_by' => 'int',
		'old_subj_date_updated' => 'datetime'
	];

	protected $fillable = [
		'SOSID',
		'SUBJECT_ID',
		'FINALGRADE',
		'REMARKS',
		'STUDENT_ID',
		'SYSEM',
		'LAST_UPDATED',
		'OTHER_REMARKS',
		'FINAL_RATING',
		'ENCODED_BY',
		'RECENT_GRADE',
		'GRADE_FINALIZED',
		'POSTED',
		'FINALIZED',
		'ENROLLMENT_ID',
		'YEAR_LEVEL',
		'SY',
		'SEM',
		'PROGRAM_TYPE',
		'FACULTY',
		'tblid',
		'IS_REMEDIAL',
		'IS_PENALTY',
		'UPDATED_BY',
		'DATE_UPDATED',
		'OLD_GRADE',
		'COURSE',
		'DATE_CREATED',
		'old_subject_id',
		'old_subj_updated_by',
		'old_subj_date_updated',
		'IS_DR_OFFICIAL'
	];

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'ENCODED_BY');
	}

	public function t_student_enrollment()
	{
		return $this->belongsTo(TStudentEnrollment::class, 'ENROLLMENT_ID');
	}

	public function t_student_grades_line()
	{
		return $this->hasOne(TStudentGradesLine::class, 'SGID');
	}
}

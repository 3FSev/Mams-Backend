<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TApplicationGraduation
 * 
 * @property int $ID
 * @property string|null $STUDENT_NO
 * @property string|null $NAME
 * @property string|null $GENDER
 * @property Carbon|null $DOB
 * @property string|null $PB
 * @property string|null $CONTACTNO
 * @property string|null $EMAILADD
 * @property string|null $FATHER
 * @property string|null $MOTHERMAIDEN
 * @property string|null $ADDRESS
 * @property string|null $ELEM1_4
 * @property string|null $ELEM_START1_4
 * @property string|null $ELEM_GRAD1_4
 * @property string|null $ELEM5_6
 * @property string|null $ELEM_START5_6
 * @property string|null $ELEM_GRAD5_6
 * @property string|null $HS1
 * @property string|null $HS_START1
 * @property string|null $HS_END1
 * @property string|null $HS2
 * @property string|null $HS_START2
 * @property string|null $HS_END2
 * @property string|null $HS3
 * @property string|null $HS_START3
 * @property string|null $HS_END3
 * @property string|null $HS4
 * @property string|null $HS_START4
 * @property string|null $HS_END4
 * @property string|null $ENTRANCE_DATA
 * @property string|null $DEGREE
 * @property string|null $MAJOR
 * @property Carbon|null $DATE_OF_GRADUATION
 * @property string|null $LOYALTY_MEDALIST
 * @property string|null $PICTURE
 * @property string|null $SCHOLARSHIP1
 * @property string|null $SCHOLARSHIP2
 * @property string|null $SCHOLARSHIP3
 * @property string|null $ORG1
 * @property string|null $ORG2
 * @property string|null $ORG3
 * @property string|null $HONORS1
 * @property string|null $HONORS2
 * @property string|null $HONORS3
 * @property string|null $HONORS4
 * @property string|null $HONORS5
 * @property string|null $SEMINAR1
 * @property string|null $SEMINAR2
 * @property string|null $SEMINAR3
 * @property string|null $SEMINAR4
 * @property string|null $SEMINAR5
 * @property string|null $SKILLS1
 * @property string|null $SKILLS2
 * @property string|null $SKILLS3
 * @property Carbon|null $DATEOFAPPLICATION
 * @property Carbon|null $DATEUPDATED
 * @property string|null $applicationID
 * @property string|null $FBNAME
 * @property string|null $STATUS
 * @property string|null $REGDEF
 * @property string|null $UPDATEDBY
 * @property string|null $MINOR
 * @property string|null $THESIS
 * @property string|null $COLLEGE_NAME
 * @property string|null $COL_LOCATION
 * @property string|null $YEAR_GRAD_COLLEGE
 * @property string|null $PROGRAM_TYPE
 * @property string|null $GUARDIAN
 * @property string|null $name_g11
 * @property string|null $start_g11
 * @property string|null $grad_g11
 * @property string|null $name_g12
 * @property string|null $start_g12
 * @property string|null $grad_g12
 *
 * @package App\Models
 */
class TApplicationGraduation extends Model
{
	protected $table = 't_application_graduation';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'DOB' => 'datetime',
		'DATE_OF_GRADUATION' => 'datetime',
		'DATEOFAPPLICATION' => 'datetime',
		'DATEUPDATED' => 'datetime'
	];

	protected $fillable = [
		'STUDENT_NO',
		'NAME',
		'GENDER',
		'DOB',
		'PB',
		'CONTACTNO',
		'EMAILADD',
		'FATHER',
		'MOTHERMAIDEN',
		'ADDRESS',
		'ELEM1_4',
		'ELEM_START1_4',
		'ELEM_GRAD1_4',
		'ELEM5_6',
		'ELEM_START5_6',
		'ELEM_GRAD5_6',
		'HS1',
		'HS_START1',
		'HS_END1',
		'HS2',
		'HS_START2',
		'HS_END2',
		'HS3',
		'HS_START3',
		'HS_END3',
		'HS4',
		'HS_START4',
		'HS_END4',
		'ENTRANCE_DATA',
		'DEGREE',
		'MAJOR',
		'DATE_OF_GRADUATION',
		'LOYALTY_MEDALIST',
		'PICTURE',
		'SCHOLARSHIP1',
		'SCHOLARSHIP2',
		'SCHOLARSHIP3',
		'ORG1',
		'ORG2',
		'ORG3',
		'HONORS1',
		'HONORS2',
		'HONORS3',
		'HONORS4',
		'HONORS5',
		'SEMINAR1',
		'SEMINAR2',
		'SEMINAR3',
		'SEMINAR4',
		'SEMINAR5',
		'SKILLS1',
		'SKILLS2',
		'SKILLS3',
		'DATEOFAPPLICATION',
		'DATEUPDATED',
		'applicationID',
		'FBNAME',
		'STATUS',
		'REGDEF',
		'UPDATEDBY',
		'MINOR',
		'THESIS',
		'COLLEGE_NAME',
		'COL_LOCATION',
		'YEAR_GRAD_COLLEGE',
		'PROGRAM_TYPE',
		'GUARDIAN',
		'name_g11',
		'start_g11',
		'grad_g11',
		'name_g12',
		'start_g12',
		'grad_g12'
	];
}

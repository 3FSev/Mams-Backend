<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TTor
 * 
 * @property int $ID
 * @property string|null $STUDENT_NO
 * @property string|null $NAME
 * @property string|null $GENDER
 * @property Carbon|null $DOB
 * @property string|null $PB
 * @property string|null $ADDRESS
 * @property string|null $COURSE
 * @property string|null $ADMISSION_DATE
 * @property string|null $ENTRANCE_CREDENTIALS
 * @property Carbon|null $GRAD_DATE
 * @property string|null $DEGREE
 * @property string|null $MAJOR
 * @property string|null $SO
 * @property string|null $PRIMARY_COURSE
 * @property int|null $P_YEAR
 * @property string|null $INTERMEDIATE_COURSE
 * @property int|null $I_YEAR
 * @property string|null $HIGH_SCHOOL
 * @property int|null $HS_YEAR
 * @property string|null $REMARKS
 * @property string|null $PREPARED_BY
 * @property string|null $CHECKED_BY
 * @property string|null $REGISTRAR
 * @property Carbon|null $DATE_ADDED
 * @property int|null $ADDED_BY
 * @property string|null $FOOTER
 * @property string|null $NSTP_SN
 * @property string|null $SHS_SCHOOL
 * @property int|null $SHS_YEAR
 * @property string|null $FOOTER_POS_B4
 * @property string|null $COL_SCHOOL
 * @property int|null $COL_YEAR
 * @property string|null $MS_SCHOOL
 * @property int|null $MS_YEAR
 * @property string|null $FOOTER_B
 * @property string|null $DISSERTATION
 * @property string|null $TD_TITLE
 * @property string|null $FOOTER_A
 * @property string|null $THESIS_A
 * @property string|null $FOOTER_2
 *
 * @package App\Models
 */
class TTor extends Model
{
	protected $table = 't_tor';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'DOB' => 'datetime',
		'GRAD_DATE' => 'datetime',
		'P_YEAR' => 'int',
		'I_YEAR' => 'int',
		'HS_YEAR' => 'int',
		'DATE_ADDED' => 'datetime',
		'ADDED_BY' => 'int',
		'SHS_YEAR' => 'int',
		'COL_YEAR' => 'int',
		'MS_YEAR' => 'int'
	];

	protected $fillable = [
		'STUDENT_NO',
		'NAME',
		'GENDER',
		'DOB',
		'PB',
		'ADDRESS',
		'COURSE',
		'ADMISSION_DATE',
		'ENTRANCE_CREDENTIALS',
		'GRAD_DATE',
		'DEGREE',
		'MAJOR',
		'SO',
		'PRIMARY_COURSE',
		'P_YEAR',
		'INTERMEDIATE_COURSE',
		'I_YEAR',
		'HIGH_SCHOOL',
		'HS_YEAR',
		'REMARKS',
		'PREPARED_BY',
		'CHECKED_BY',
		'REGISTRAR',
		'DATE_ADDED',
		'ADDED_BY',
		'FOOTER',
		'NSTP_SN',
		'SHS_SCHOOL',
		'SHS_YEAR',
		'FOOTER_POS_B4',
		'COL_SCHOOL',
		'COL_YEAR',
		'MS_SCHOOL',
		'MS_YEAR',
		'FOOTER_B',
		'DISSERTATION',
		'TD_TITLE',
		'FOOTER_A',
		'THESIS_A',
		'FOOTER_2'
	];
}

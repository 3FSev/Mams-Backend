<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RParent
 * 
 * @property int $PARENT_ID
 * @property string|null $F_FNAME
 * @property string|null $F_MNAME
 * @property string|null $F_LNAME
 * @property string $M_FNAME
 * @property string|null $M_MNAME
 * @property string $M_LNAME
 * @property string|null $ADDRESS
 * @property string|null $PROVINCE
 * @property string $MUNICIPALITY
 * @property string|null $ZIPCODE
 * @property string|null $PHONE
 * @property string|null $S_NO
 * @property int|null $F_AGE
 * @property string|null $F_LIVING_STATUS
 * @property string|null $F_OCCUPATION
 * @property string|null $F_COMPANY
 * @property int|null $M_AGE
 * @property string|null $M_LIVING_STATUS
 * @property string|null $M_OCCUPATION
 * @property string|null $M_COMPANY
 * @property string|null $P_MARITAL_STATUS
 * @property int|null $NO_CHILD
 * @property int|null $NO_SIS
 * @property int|null $NO_BRO
 * @property string|null $F_EDUC
 * @property string|null $M_EDUC
 * @property string|null $UPDATED_BY
 * @property Carbon|null $DATE_UPDATED
 * @property string|null $F_PHONE
 * @property string|null $OFW_M
 * @property string|null $Country_M
 * @property string|null $OFW_F
 * @property string|null $Country_F
 * 
 * @property Collection|TApplicant[] $t_applicants
 *
 * @package App\Models
 */
class RParent extends Model
{
	protected $table = 'r_parent';
	protected $primaryKey = 'PARENT_ID';
	public $timestamps = false;

	protected $casts = [
		'F_AGE' => 'int',
		'M_AGE' => 'int',
		'NO_CHILD' => 'int',
		'NO_SIS' => 'int',
		'NO_BRO' => 'int',
		'DATE_UPDATED' => 'datetime'
	];

	protected $fillable = [
		'F_FNAME',
		'F_MNAME',
		'F_LNAME',
		'M_FNAME',
		'M_MNAME',
		'M_LNAME',
		'ADDRESS',
		'PROVINCE',
		'MUNICIPALITY',
		'ZIPCODE',
		'PHONE',
		'S_NO',
		'F_AGE',
		'F_LIVING_STATUS',
		'F_OCCUPATION',
		'F_COMPANY',
		'M_AGE',
		'M_LIVING_STATUS',
		'M_OCCUPATION',
		'M_COMPANY',
		'P_MARITAL_STATUS',
		'NO_CHILD',
		'NO_SIS',
		'NO_BRO',
		'F_EDUC',
		'M_EDUC',
		'UPDATED_BY',
		'DATE_UPDATED',
		'F_PHONE',
		'OFW_M',
		'Country_M',
		'OFW_F',
		'Country_F'
	];

	public function t_applicants()
	{
		return $this->hasMany(TApplicant::class, 'PARENT');
	}
}

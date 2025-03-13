<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RGuardian
 * 
 * @property int $GUARDIAN_ID
 * @property string $FNAME
 * @property string|null $MNAME
 * @property string $LNAME
 * @property string|null $ADDRESS
 * @property string|null $PROVINCE
 * @property string $MUNICIPALITY
 * @property string|null $ZIPCODE
 * @property string|null $PHONE
 * @property string|null $USERNAME
 * @property string|null $PASSWORD
 * @property string|null $VAL
 * @property string|null $relationship
 * @property int|null $applicant
 * 
 * @property Collection|TApplicant[] $t_applicants
 *
 * @package App\Models
 */
class RGuardian extends Model
{
	protected $table = 'r_guardian';
	protected $primaryKey = 'GUARDIAN_ID';
	public $timestamps = false;

	protected $casts = [
		'applicant' => 'int'
	];

	protected $fillable = [
		'FNAME',
		'MNAME',
		'LNAME',
		'ADDRESS',
		'PROVINCE',
		'MUNICIPALITY',
		'ZIPCODE',
		'PHONE',
		'USERNAME',
		'PASSWORD',
		'VAL',
		'relationship',
		'applicant'
	];

	public function t_applicants()
	{
		return $this->hasMany(TApplicant::class, 'GUARDIAN');
	}
}

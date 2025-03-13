<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CompanyProfile
 * 
 * @property int $ID
 * @property string|null $COMPANY_NAME
 * @property string|null $COMPANY_LOGO
 * @property string|null $COMPANY_ADDRESS
 * @property string|null $COMPANY_PHONE
 * @property string|null $STATUS
 *
 * @package App\Models
 */
class CompanyProfile extends Model
{
	protected $table = 'company_profile';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'COMPANY_NAME',
		'COMPANY_LOGO',
		'COMPANY_ADDRESS',
		'COMPANY_PHONE',
		'STATUS'
	];
}

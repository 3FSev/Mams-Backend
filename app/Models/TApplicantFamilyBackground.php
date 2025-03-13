<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TApplicantFamilyBackground
 * 
 * @property int $id
 * @property int|null $app_id
 * @property string|null $f_fname
 * @property string|null $f_mname
 * @property string|null $f_lname
 * @property string|null $f_still_alive
 * @property string|null $f_home_address
 * @property string|null $f_tel_no
 * @property string|null $f_mobile_no
 * @property string|null $f_email
 * @property string|null $f_highest_educ_attainment
 * @property string|null $f_occupation
 * @property string|null $f_employer_name
 * @property string|null $f_employer_address
 * @property string|null $f_employer_tel
 * @property string|null $m_fname
 * @property string|null $m_mname
 * @property string|null $m_lname
 * @property string|null $m_mfname
 * @property string|null $m_mmname
 * @property string|null $m_mlname
 * @property string|null $m_still_alive
 * @property string|null $m_home_address
 * @property string|null $m_tel_no
 * @property string|null $m_mobile_no
 * @property string|null $m_email
 * @property string|null $m_highest_educ_attainment
 * @property string|null $m_occupation
 * @property string|null $m_employer_name
 * @property string|null $m_employer_address
 * @property string|null $m_employer_tel
 * @property float|null $gross_monthly_family_income
 * @property int|null $no_of_brothers
 * @property int|null $no_of_sisters
 * @property int|null $no_of_brothers_w_income
 * @property int|null $no_of_sisters_w_income
 *
 * @package App\Models
 */
class TApplicantFamilyBackground extends Model
{
	protected $table = 't_applicant_family_background';
	public $timestamps = false;

	protected $casts = [
		'app_id' => 'int',
		'gross_monthly_family_income' => 'float',
		'no_of_brothers' => 'int',
		'no_of_sisters' => 'int',
		'no_of_brothers_w_income' => 'int',
		'no_of_sisters_w_income' => 'int'
	];

	protected $fillable = [
		'app_id',
		'f_fname',
		'f_mname',
		'f_lname',
		'f_still_alive',
		'f_home_address',
		'f_tel_no',
		'f_mobile_no',
		'f_email',
		'f_highest_educ_attainment',
		'f_occupation',
		'f_employer_name',
		'f_employer_address',
		'f_employer_tel',
		'm_fname',
		'm_mname',
		'm_lname',
		'm_mfname',
		'm_mmname',
		'm_mlname',
		'm_still_alive',
		'm_home_address',
		'm_tel_no',
		'm_mobile_no',
		'm_email',
		'm_highest_educ_attainment',
		'm_occupation',
		'm_employer_name',
		'm_employer_address',
		'm_employer_tel',
		'gross_monthly_family_income',
		'no_of_brothers',
		'no_of_sisters',
		'no_of_brothers_w_income',
		'no_of_sisters_w_income'
	];
}

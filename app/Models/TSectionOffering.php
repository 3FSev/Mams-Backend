<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TSectionOffering
 * 
 * @property int $ID
 * @property string $TYPE
 * @property int|null $CAMPUS
 * @property int $SY_SEM
 * @property int|null $CURRICULUM_ID
 * @property int|null $SECTION
 * @property int|null $YR_LVL
 * @property string|null $SECTION_IRREG
 * @property string $PROGRAM_TYPE
 * @property Carbon $TIMESTAMP
 * 
 * @property TSySem $t_sy_sem
 * @property Collection|TSectionOfferingOpen[] $t_section_offering_opens
 * @property Collection|TSectionOfferingSubject[] $t_section_offering_subjects
 *
 * @package App\Models
 */
class TSectionOffering extends Model
{
	protected $table = 't_section_offering';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'CAMPUS' => 'int',
		'SY_SEM' => 'int',
		'CURRICULUM_ID' => 'int',
		'SECTION' => 'int',
		'YR_LVL' => 'int',
		'TIMESTAMP' => 'datetime'
	];

	protected $fillable = [
		'TYPE',
		'CAMPUS',
		'SY_SEM',
		'CURRICULUM_ID',
		'SECTION',
		'YR_LVL',
		'SECTION_IRREG',
		'PROGRAM_TYPE',
		'TIMESTAMP'
	];

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SY_SEM');
	}

	public function t_section_offering_opens()
	{
		return $this->hasMany(TSectionOfferingOpen::class, 'SECTION_OFFERING');
	}

	public function t_section_offering_subjects()
	{
		return $this->hasMany(TSectionOfferingSubject::class, 'SECTION_OFFERING_ID');
	}
}

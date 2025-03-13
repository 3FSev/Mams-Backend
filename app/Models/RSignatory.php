<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RSignatory
 * 
 * @property int $ID
 * @property int|null $REPORT
 * @property int|null $PREPARED_BY
 * @property int|null $CHECKED_BY
 * @property int|null $OFFICE_HEAD
 * @property string|null $STATUS
 * 
 * @property RReport|null $r_report
 * @property RUser|null $r_user
 *
 * @package App\Models
 */
class RSignatory extends Model
{
	protected $table = 'r_signatories';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'REPORT' => 'int',
		'PREPARED_BY' => 'int',
		'CHECKED_BY' => 'int',
		'OFFICE_HEAD' => 'int'
	];

	protected $fillable = [
		'REPORT',
		'PREPARED_BY',
		'CHECKED_BY',
		'OFFICE_HEAD',
		'STATUS'
	];

	public function r_report()
	{
		return $this->belongsTo(RReport::class, 'REPORT');
	}

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'OFFICE_HEAD');
	}
}

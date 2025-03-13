<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TCertification
 * 
 * @property int $ID
 * @property string|null $STUDENT_NO
 * @property string|null $NAME
 * @property string|null $ADDRESS
 * @property Carbon|null $DATEISSUE
 * @property Carbon|null $DATEFROM
 * @property Carbon|null $DATETO
 * @property Carbon $DATEREQ
 * @property string|null $ADDED_BY
 *
 * @package App\Models
 */
class TCertification extends Model
{
	protected $table = 't_certification';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'DATEISSUE' => 'datetime',
		'DATEFROM' => 'datetime',
		'DATETO' => 'datetime',
		'DATEREQ' => 'datetime'
	];

	protected $fillable = [
		'STUDENT_NO',
		'NAME',
		'ADDRESS',
		'DATEISSUE',
		'DATEFROM',
		'DATETO',
		'DATEREQ',
		'ADDED_BY'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TScholar
 * 
 * @property int $ID
 * @property int $STUDENT_ID
 * @property int $SY_SEM
 * @property int|null $COURSE
 * @property string $SCHOLARSHIP
 *
 * @package App\Models
 */
class TScholar extends Model
{
	protected $table = 't_scholar';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'STUDENT_ID' => 'int',
		'SY_SEM' => 'int',
		'COURSE' => 'int'
	];

	protected $fillable = [
		'ID',
		'COURSE'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RClaimedDocument
 * 
 * @property int $ID
 * @property string|null $DESCRIPTION
 * @property string|null $COUNTREQ
 *
 * @package App\Models
 */
class RClaimedDocument extends Model
{
	protected $table = 'r_claimed_document';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int'
	];

	protected $fillable = [
		'ID',
		'DESCRIPTION',
		'COUNTREQ'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 *
 * @property int $id
 * @property string $country_name
 * @property int $PhoneCode
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'countries';

	protected $casts = [
		'PhoneCode' => 'int'
	];

	protected $fillable = [
		'country_name',
		'phone_code',
		'country_code',
	];
}

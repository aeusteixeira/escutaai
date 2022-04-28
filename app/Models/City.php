<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class City
 *
 * @property int $id
 * @property int $state_id
 * @property string $title
 * @property int $iso
 * @property int $iso_ddd
 * @property int $status
 * @property string $slug
 * @property int $population
 * @property float $lat
 * @property float $long
 * @property float $income_per_capita
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class City extends Model
{
    use HasFactory;
	protected $table = 'cities';

	protected $casts = [
		'state_id' => 'int',
		'iso' => 'int',
		'iso_ddd' => 'int',
		'status' => 'int',
		'population' => 'int',
		'lat' => 'float',
		'long' => 'float',
		'income_per_capita' => 'float'
	];

	protected $fillable = [
		'state_id',
		'title',
		'iso',
		'iso_ddd',
		'status',
		'slug',
		'population',
		'lat',
		'long',
		'income_per_capita'
	];
}

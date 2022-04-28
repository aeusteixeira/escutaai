<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class State
 *
 * @property int $id
 * @property string $title
 * @property string $letter
 * @property int $iso
 * @property string $slug
 * @property int $population
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class State extends Model
{
    use HasFactory;
	protected $table = 'states';

	protected $casts = [
		'iso' => 'int',
		'population' => 'int'
	];

	protected $fillable = [
		'title',
		'letter',
		'iso',
		'slug',
		'population'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Event
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $location
 * @property string $date
 * @property string $time
 * @property string $price
 * @property string $capacity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Participant[] $participants
 * @property Collection|Shopping[] $shoppings
 *
 * @package App\Models
 */
class Event extends Model
{
    use HasFactory;
	protected $table = 'events';

	protected $fillable = [
		'name',
		'description',
		'image',
		'location',
		'date',
		'time',
		'price',
		'capacity'
	];

	public function participants()
	{
		return $this->hasMany(Participant::class);
	}

	public function shoppings()
	{
		return $this->hasMany(Shopping::class);
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Schedule
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $location
 * @property string $image
 * @property Carbon $start_time
 * @property string $call_to_action
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Schedule extends Model
{
    use HasFactory;
	protected $table = 'schedules';

	protected $dates = [
		'start_time'
	];

	protected $fillable = [
		'title',
		'description',
		'location',
		'image',
		'start_time',
		'call_to_action'
	];
}

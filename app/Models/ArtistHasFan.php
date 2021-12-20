<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArtistHasFan
 * 
 * @property int $id
 * @property int $artist_id
 * @property int $fan_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Artist $artist
 * @property User $user
 *
 * @package App\Models
 */
class ArtistHasFan extends Model
{
	protected $table = 'artist_has_fans';

	protected $casts = [
		'artist_id' => 'int',
		'fan_id' => 'int'
	];

	protected $fillable = [
		'artist_id',
		'fan_id'
	];

	public function artist()
	{
		return $this->belongsTo(Artist::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'fan_id');
	}
}

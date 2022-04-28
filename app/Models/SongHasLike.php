<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SongHasLike
 *
 * @property int $id
 * @property int $song_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Song $song
 * @property User $user
 *
 * @package App\Models
 */
class SongHasLike extends Model
{
    use HasFactory;
	protected $table = 'song_has_likes';

	protected $casts = [
		'song_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'song_id',
		'user_id'
	];

	public function song()
	{
		return $this->belongsTo(Song::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

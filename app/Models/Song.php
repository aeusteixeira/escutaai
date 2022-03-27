<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Song
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $description
 * @property Carbon $duration
 * @property int $album_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Album $album
 * @property Collection|SongHasLike[] $song_has_likes
 * @property Collection|SongHasMember[] $song_has_members
 *
 * @package App\Models
 */
class Song extends Model
{
	protected $table = 'songs';

	protected $casts = [
		'album_id' => 'int'
	];

	protected $dates = [
		'duration'
	];

	protected $fillable = [
		'title',
		'image',
		'description',
		'duration',
		'album_id'
	];

	public function album()
	{
		return $this->belongsTo(Album::class);
	}

	public function song_has_likes()
	{
		return $this->hasMany(SongHasLike::class);
	}

	public function song_has_members()
	{
		return $this->hasMany(SongHasMember::class);
	}
}

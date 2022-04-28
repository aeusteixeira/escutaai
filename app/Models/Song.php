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
 * @property Collection|SongHasMember[] $song_has_members
 *
 * @package App\Models
 */
class Song extends Model
{
    use HasFactory;
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

	public function song_has_members()
	{
		return $this->hasMany(SongHasMember::class);
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Album
 * 
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property Carbon $year
 * @property int $artist_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Artist $artist
 * @property Collection|Comment[] $comments
 * @property Collection|Song[] $songs
 *
 * @package App\Models
 */
class Album extends Model
{
	protected $table = 'albums';

	protected $casts = [
		'artist_id' => 'int'
	];

	protected $dates = [
		'year'
	];

	protected $fillable = [
		'title',
		'slug',
		'description',
		'image',
		'year',
		'artist_id'
	];

	public function artist()
	{
		return $this->belongsTo(Artist::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function songs()
	{
		return $this->hasMany(Song::class);
	}
}

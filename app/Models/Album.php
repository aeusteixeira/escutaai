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
 * Class Album
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property string $year
 * @property int $artist_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Artist $artist
 * @property Collection|Song[] $songs
 *
 * @package App\Models
 */
class Album extends Model
{
    use HasFactory;
	protected $table = 'albums';

	protected $casts = [
		'artist_id' => 'int'
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

	public function songs()
	{
		return $this->hasMany(Song::class);
	}
}

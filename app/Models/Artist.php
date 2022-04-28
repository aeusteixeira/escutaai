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
 * Class Artist
 *
 * @property int $id
 * @property string $name
 * @property string $resume
 * @property string|null $history
 * @property bool $has_logo
 * @property string|null $logo_path
 * @property string $account
 * @property int $type_of_artist_id
 * @property int|null $number_of_members
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property TypeOfArtist $type_of_artist
 * @property Collection|Album[] $albums
 * @property Collection|ArtistHasFan[] $artist_has_fans
 * @property Collection|ArtistHasMember[] $artist_has_members
 * @property Collection|Category[] $categories
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Artist extends Model
{
    use HasFactory;
	protected $table = 'artists';

	protected $casts = [
		'has_logo' => 'bool',
		'type_of_artist_id' => 'int',
		'number_of_members' => 'int'
	];

	protected $fillable = [
		'name',
		'resume',
		'history',
		'has_logo',
		'logo_path',
		'account',
		'type_of_artist_id',
		'number_of_members'
	];

	public function type_of_artist()
	{
		return $this->belongsTo(TypeOfArtist::class);
	}

	public function albums()
	{
		return $this->hasMany(Album::class);
	}

	public function artist_has_fans()
	{
		return $this->hasMany(ArtistHasFan::class);
	}

	public function artist_has_members()
	{
		return $this->hasMany(ArtistHasMember::class);
	}

	public function categories()
	{
		return $this->hasMany(Category::class);
	}

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}

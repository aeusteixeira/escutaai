<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Artist
 *
 * @property int $id
 * @property string $name
 * @property string $resume
 * @property string|null $history
 * @property bool $has_logo
 * @property string|null $logo_path
 * @property string $subdomain
 * @property string $type
 * @property int|null $number_of_members
 * @property string|null $account
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
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
	protected $table = 'artists';

	protected $casts = [
		'has_logo' => 'bool',
		'number_of_members' => 'int'
	];

	protected $fillable = [
		'name',
		'resume',
		'history',
		'has_logo',
		'logo_path',
		'account',
		'type',
		'number_of_members',
	];

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

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ArtistHasFan[] $artist_has_fans
 * @property Collection|ArtistHasMember[] $artist_has_members
 * @property Collection|CommentHasLike[] $comment_has_likes
 * @property Collection|Comment[] $comments
 * @property Collection|Shopping[] $shoppings
 * @property Collection|SongHasLike[] $song_has_likes
 * @property Collection|SongHasMember[] $song_has_members
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function artist_has_fans()
	{
		return $this->hasMany(ArtistHasFan::class, 'fan_id');
	}

	public function artist_has_members()
	{
		return $this->hasMany(ArtistHasMember::class, 'member_id');
	}

	public function comment_has_likes()
	{
		return $this->hasMany(CommentHasLike::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function shoppings()
	{
		return $this->hasMany(Shopping::class);
	}

	public function song_has_likes()
	{
		return $this->hasMany(SongHasLike::class);
	}

	public function song_has_members()
	{
		return $this->hasMany(SongHasMember::class, 'member_id');
	}
}

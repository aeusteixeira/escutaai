<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property string $content
 * @property int $user_id
 * @property int $album_id
 * @property int|null $parent_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Album $album
 * @property Comment|null $comment
 * @property User $user
 * @property Collection|CommentHasLike[] $comment_has_likes
 * @property Collection|Comment[] $comments
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comments';

	protected $casts = [
		'user_id' => 'int',
		'album_id' => 'int',
		'parent_id' => 'int'
	];

	protected $fillable = [
		'content',
		'user_id',
		'album_id',
		'parent_id'
	];

	public function album()
	{
		return $this->belongsTo(Album::class);
	}

	public function comment()
	{
		return $this->belongsTo(Comment::class, 'parent_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comment_has_likes()
	{
		return $this->hasMany(CommentHasLike::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'parent_id');
	}
}

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
 * Class Comment
 *
 * @property int $id
 * @property int $user_id
 * @property int $commentable_parent_id
 * @property string $body
 * @property string $commentable_type
 * @property int $commentable_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Comment $comment
 * @property User $user
 * @property Collection|Comment[] $comments
 *
 * @package App\Models
 */
class Comment extends Model
{
    use HasFactory;
	protected $table = 'comments';

	protected $casts = [
		'user_id' => 'int',
		'commentable_parent_id' => 'int',
		'commentable_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'commentable_parent_id',
		'body',
		'commentable_type',
		'commentable_id'
	];

	public function comment()
	{
		return $this->belongsTo(Comment::class, 'commentable_parent_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'commentable_parent_id');
	}
}

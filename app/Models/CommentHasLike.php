<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CommentHasLike
 *
 * @property int $id
 * @property int $comment_id
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Comment $comment
 * @property User $user
 *
 * @package App\Models
 */
class CommentHasLike extends Model
{
    use HasFactory;
	protected $table = 'comment_has_likes';

	protected $casts = [
		'comment_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'comment_id',
		'user_id'
	];

	public function comment()
	{
		return $this->belongsTo(Comment::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

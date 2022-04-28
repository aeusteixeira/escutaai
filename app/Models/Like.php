<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Like
 *
 * @property int $id
 * @property int $user_id
 * @property int $type_like_id
 * @property string $likeable_type
 * @property int $likeable_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property TypeOfLike $type_of_like
 * @property User $user
 *
 * @package App\Models
 */
class Like extends Model
{
    use HasFactory;
	protected $table = 'likes';

	protected $casts = [
		'user_id' => 'int',
		'type_like_id' => 'int',
		'likeable_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'type_like_id',
		'likeable_type',
		'likeable_id'
	];

	public function type_of_like()
	{
		return $this->belongsTo(TypeOfLike::class, 'type_like_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

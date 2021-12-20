<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SongHasMember
 * 
 * @property int $id
 * @property int $song_id
 * @property int $member_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Song $song
 *
 * @package App\Models
 */
class SongHasMember extends Model
{
	protected $table = 'song_has_members';

	protected $casts = [
		'song_id' => 'int',
		'member_id' => 'int'
	];

	protected $fillable = [
		'song_id',
		'member_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'member_id');
	}

	public function song()
	{
		return $this->belongsTo(Song::class);
	}
}

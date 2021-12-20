<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArtistHasMember
 * 
 * @property int $id
 * @property int $artist_id
 * @property int $member_id
 * @property int $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Artist $artist
 * @property User $user
 * @property TypeOfMember $type_of_member
 *
 * @package App\Models
 */
class ArtistHasMember extends Model
{
	protected $table = 'artist_has_members';

	protected $casts = [
		'artist_id' => 'int',
		'member_id' => 'int',
		'type' => 'int'
	];

	protected $fillable = [
		'artist_id',
		'member_id',
		'type'
	];

	public function artist()
	{
		return $this->belongsTo(Artist::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'member_id');
	}

	public function type_of_member()
	{
		return $this->belongsTo(TypeOfMember::class, 'type');
	}
}

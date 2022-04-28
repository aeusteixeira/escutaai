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
 * Class TypeOfMember
 *
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|ArtistHasMember[] $artist_has_members
 *
 * @package App\Models
 */
class TypeOfMember extends Model
{
    use HasFactory;
	protected $table = 'type_of_members';

	protected $fillable = [
		'name'
	];

	public function artist_has_members()
	{
		return $this->hasMany(ArtistHasMember::class, 'type');
	}
}

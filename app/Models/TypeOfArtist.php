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
 * Class TypeOfArtist
 *
 * @property int $id
 * @property string $title
 * @property string $icon
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Artist[] $artists
 *
 * @package App\Models
 */
class TypeOfArtist extends Model
{
    use HasFactory;
	protected $table = 'type_of_artists';

	protected $casts = [
		'is_active' => 'bool'
	];

	protected $fillable = [
		'title',
		'icon',
		'is_active'
	];

	public function artists()
	{
		return $this->hasMany(Artist::class);
	}
}

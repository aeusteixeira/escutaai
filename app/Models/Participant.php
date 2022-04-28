<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Participant
 *
 * @property int $id
 * @property int $event_id
 * @property string $participantable_type
 * @property int $participantable_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Event $event
 *
 * @package App\Models
 */
class Participant extends Model
{
    use HasFactory;
	protected $table = 'participants';

	protected $casts = [
		'event_id' => 'int',
		'participantable_id' => 'int'
	];

	protected $fillable = [
		'event_id',
		'participantable_type',
		'participantable_id'
	];

	public function event()
	{
		return $this->belongsTo(Event::class);
	}
}

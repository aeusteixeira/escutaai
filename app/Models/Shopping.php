<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Shopping
 *
 * @property int $id
 * @property int|null $product_id
 * @property int|null $event_id
 * @property int $user_id
 * @property int $quantity
 * @property float $price
 * @property string $data
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Event|null $event
 * @property Product|null $product
 * @property User $user
 *
 * @package App\Models
 */
class Shopping extends Model
{
    use HasFactory;
	protected $table = 'shoppings';

	protected $casts = [
		'product_id' => 'int',
		'event_id' => 'int',
		'user_id' => 'int',
		'quantity' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'product_id',
		'event_id',
		'user_id',
		'quantity',
		'price',
		'data'
	];

	public function event()
	{
		return $this->belongsTo(Event::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

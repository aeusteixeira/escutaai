<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Shopping
 * 
 * @property int $id
 * @property int $product_id
 * @property int $user_id
 * @property int $quantity
 * @property float $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product $product
 * @property User $user
 *
 * @package App\Models
 */
class Shopping extends Model
{
	protected $table = 'shoppings';

	protected $casts = [
		'product_id' => 'int',
		'user_id' => 'int',
		'quantity' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'product_id',
		'user_id',
		'quantity',
		'price'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
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
 * Class Product
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property float $price
 * @property int $quantity
 * @property int $category_id
 * @property int $artist_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Artist $artist
 * @property Category $category
 * @property Collection|Shopping[] $shoppings
 *
 * @package App\Models
 */
class Product extends Model
{
    use HasFactory;
	protected $table = 'products';

	protected $casts = [
		'price' => 'float',
		'quantity' => 'int',
		'category_id' => 'int',
		'artist_id' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'description',
		'image',
		'price',
		'quantity',
		'category_id',
		'artist_id'
	];

	public function artist()
	{
		return $this->belongsTo(Artist::class);
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function shoppings()
	{
		return $this->hasMany(Shopping::class);
	}
}

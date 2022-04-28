<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';

    protected $fillable = [
        'name',
        'is_active',
    ];

    public function songs()
    {
        return $this->belongsToMany(Song::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}

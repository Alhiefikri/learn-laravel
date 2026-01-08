<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //
    use HasFactory;
    protected $fillable = ['name', 'slug'];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function badgeColor(): Attribute
    {
        return Attribute::make(
            get: fn() => match ($this->color_name) {
                'red' => 'bg-red-100 text-red-800 border-red-200',
                'blue' => 'bg-blue-100 text-blue-800 border-blue-200',
                'green' => 'bg-green-100 text-green-800 border-green-200',
                'yellow' => 'bg-yellow-100 text-yellow-800 border-yellow-200',
                default => 'bg-gray-100 text-gray-800 border-gray-200',
            },
        );
    }
}

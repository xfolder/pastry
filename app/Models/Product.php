<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'on_sale',
        'images'
    ];
    protected $casts = [
        'images' => 'array'
    ];

    public function ingredients(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class)
            ->withPivot('quantity');
    }

    public function images(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $paths = collect(json_decode($value));
                return $paths->map(function ($path) {
                    return asset('storage/' . $path);
                });
            }
        );
    }

}

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

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
        'images' => 'array',
        'price_in_time' => 'float'
    ];

    protected $appends = [
        'price_in_time',
        'saleable'
    ];

    public function ingredients(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class)
            ->withPivot('quantity');
    }

    public function priceInTime(): Attribute
    {
        return Attribute::make(
            get: function () {
                $dayFromCreation = $this->created_at->diffInDays(now());
                Log::debug('days', [
                    'days' => $dayFromCreation
                ]);
                $discount = 0;
                if ($dayFromCreation >= 4) {
                    return 0;
                } elseif ($dayFromCreation >= 3 ) {
                    $discount = 80;
                } elseif ($dayFromCreation >= 2) {
                    $discount = 20;
                }

                return $this->price * (1 - $discount / 100);
            }
        );
    }

    public function saleable(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->price_in_time > 0;
            }
        );
    }
}

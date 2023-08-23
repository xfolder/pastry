<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'name',
        'measurement_unit_id',
    ];

    public function measurementUnit(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(MeasurementUnit::class);
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function nameWithMeasurementUnit(): Attribute
    {
        return Attribute::make(
            get: function () {
                if ($this->relationLoaded('measurementUnit') && $this->measurementUnit !== null) {
                    return $this->name.' ('.$this->measurementUnit->abbreviation.')';
                }

                return $this->name;
            }
        );
    }
}

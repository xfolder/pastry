<?php

namespace App\Http\Resources;

use App\Models\Ingredient;
use Spatie\LaravelData\Data;

/** @typescript */
class IngredientDto extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public ?float $quantity,
        public ?MeasurementUnitDto $measurement_unit,
    ) {
    }

    public static function fromModel(Ingredient $model): self
    {
        return new self(
            id: $model->id,
            name: $model->name,
            quantity: $model->pivot->quantity,
            measurement_unit: $model->measurement_unit_id && $model->relationLoaded('measurementUnit') ? MeasurementUnitDto::from($model->measurementUnit) : null,
        );
    }
}

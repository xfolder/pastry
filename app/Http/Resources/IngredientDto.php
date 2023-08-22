<?php

namespace App\Http\Resources;

use App\LaravelData\Transformers\AssetPathTransformer;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Collection;
use Spatie\LaravelData\Attributes\WithTransformer;
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

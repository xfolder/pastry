<?php

namespace App\Http\Resources;

use App\LaravelData\Transformers\AssetPathTransformer;
use Illuminate\Database\Eloquent\Collection;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;

/** @typescript */
class MeasurementUnitDto extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public string $abbreviation,
    ) {
    }
}
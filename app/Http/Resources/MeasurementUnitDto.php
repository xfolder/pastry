<?php

namespace App\Http\Resources;

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

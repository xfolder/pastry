<?php

namespace App\Http\Resources;

use Spatie\LaravelData\Data;

/** @typescript */
class ProductDto extends Data
{
    public function __construct(
        public string $name,
        public float $price,
        public int $quantity,
        public bool $on_sale,
        public array $images,
    ) {
    }

}

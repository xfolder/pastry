<?php

namespace App\Http\Resources;

use App\LaravelData\Transformers\AssetPathTransformer;
use Illuminate\Database\Eloquent\Collection;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

/** @typescript */
class ProductDto extends Data
{
    public function __construct(
        public int $id,
        public string $name,
        public float $price,
        public int $quantity,
        public bool $on_sale,
        #[WithTransformer(AssetPathTransformer::class)]
        public array $images,
        /** @var Collection<IngredientDto> */
        #[DataCollectionOf(IngredientDto::class)]
        public DataCollection $ingredients,
    ) {
    }
}

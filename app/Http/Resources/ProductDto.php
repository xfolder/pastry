<?php

namespace App\Http\Resources;

use App\LaravelData\Transformers\AssetPathTransformer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Attributes\WithCastable;
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
        public float $price_in_time,
        public int $quantity,
        public bool $on_sale,
        public bool $saleable,
        #[WithTransformer(AssetPathTransformer::class)]
        public array $images,
        /** @var Collection<IngredientDto> */
        #[DataCollectionOf(IngredientDto::class)]
        public ?DataCollection $ingredients,
    ) {

    }
}

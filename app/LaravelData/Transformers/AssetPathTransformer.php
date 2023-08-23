<?php
declare(strict_types=1);

namespace App\LaravelData\Transformers;

use Spatie\LaravelData\Support\DataProperty;
use Spatie\LaravelData\Transformers\ArrayableTransformer;

class AssetPathTransformer extends ArrayableTransformer
{
    public function transform(DataProperty $property, mixed $value): array
    {
        return collect($value)->map(function ($path) {
            return asset('storage/'.$path);
        })->toArray();
    }
}

<?php

namespace App\LaravelData\Transformers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Spatie\LaravelData\Support\DataProperty;
use Spatie\LaravelData\Transformers\ArrayableTransformer;
use Spatie\LaravelData\Transformers\Transformer;

class AssetPathTransformer extends ArrayableTransformer
{
    public function transform(DataProperty $property, mixed $value): array
    {
        return collect($value)->map(function ($path) {
            return asset('storage/' . $path);
        })->toArray();
    }
}

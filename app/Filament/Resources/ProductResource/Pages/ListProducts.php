<?php
declare(strict_types=1);

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected int $defaultTableRecordsPerPageSelectOption = 50;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

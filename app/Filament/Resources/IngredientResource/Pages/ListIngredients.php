<?php
declare(strict_types=1);

namespace App\Filament\Resources\IngredientResource\Pages;

use App\Filament\Resources\IngredientResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIngredients extends ListRecords
{
    protected static string $resource = IngredientResource::class;

    protected int $defaultTableRecordsPerPageSelectOption = 50;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

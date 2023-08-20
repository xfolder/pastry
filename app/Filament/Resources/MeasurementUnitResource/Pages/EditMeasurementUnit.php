<?php

namespace App\Filament\Resources\MeasurementUnitResource\Pages;

use App\Filament\Resources\MeasurementUnitResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMeasurementUnit extends EditRecord
{
    protected static string $resource = MeasurementUnitResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

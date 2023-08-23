<?php

namespace App\Filament\Resources\ProductResource\RelationManagers;

use App\Models\Ingredient;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\AttachAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class IngredientsRelationManager extends RelationManager
{
    protected static string $relationship = 'ingredients';

    protected static ?string $recordTitleAttribute = 'name';

    public $tableRecordsPerPage = 50;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('quantity')
                    ->required()
                    ->type('number')
                    ->step('0.01'),
            ]);
    }

    protected function getTableQuery(): Builder|Relation
    {
        return parent::getTableQuery()->with('measurementUnit');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('pivot.quantity')
                    ->label('Quantità')
                    ->description(fn (Ingredient $record): string => $record->measurementUnit?->abbreviation),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->recordSelectOptionsQuery(fn (Builder $query) => $query->with('measurementUnit'))
                    ->recordTitle(fn (Ingredient $record): string => $record->name_with_measurement_unit)
                    ->form(fn (AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->createOptionUsing(function ($data, $form) {
                                $ingredient = Ingredient::create([
                                    'name' => $data['name'],
                                    'measurement_unit_id' => $data['measurement_unit_id'],
                                ]);

                                return $ingredient->getKey();
                            })
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Select::make('measurement_unit_id')
                                    ->relationship('measurementUnit', 'name'),
                            ]),
                        Forms\Components\TextInput::make('quantity')
                            ->required()
                            ->numeric()
                            ->mask(fn (Forms\Components\TextInput\Mask $mask) => $mask
                                ->numeric()
                                ->minValue(0.01)
                                ->decimalPlaces(2)
                                ->padFractionalZeros()
                            ),
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DetachAction::make(),
                //                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DetachBulkAction::make(),
                //                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}

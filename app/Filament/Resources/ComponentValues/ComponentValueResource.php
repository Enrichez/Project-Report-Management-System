<?php

namespace App\Filament\Resources\ComponentValues;

use App\Filament\Resources\ComponentValues\Pages\CreateComponentValue;
use App\Filament\Resources\ComponentValues\Pages\EditComponentValue;
use App\Filament\Resources\ComponentValues\Pages\ListComponentValues;
use App\Filament\Resources\ComponentValues\Schemas\ComponentValueForm;
use App\Filament\Resources\ComponentValues\Tables\ComponentValuesTable;
use App\Models\ComponentValue;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ComponentValueResource extends Resource
{
    protected static ?string $model = ComponentValue::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedVariable;

    protected static UnitEnum|string|null $navigationGroup = 'Project Management';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return ComponentValueForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ComponentValuesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListComponentValues::route('/'),
            'create' => CreateComponentValue::route('/create'),
            'edit' => EditComponentValue::route('/{record}/edit'),
        ];
    }
}

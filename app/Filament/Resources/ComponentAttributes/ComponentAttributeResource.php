<?php

namespace App\Filament\Resources\ComponentAttributes;

use App\Filament\Resources\ComponentAttributes\Pages\CreateComponentAttribute;
use App\Filament\Resources\ComponentAttributes\Pages\EditComponentAttribute;
use App\Filament\Resources\ComponentAttributes\Pages\ListComponentAttributes;
use App\Filament\Resources\ComponentAttributes\Pages\ViewComponentAttribute;
use App\Filament\Resources\ComponentAttributes\Schemas\ComponentAttributeForm;
use App\Filament\Resources\ComponentAttributes\Schemas\ComponentAttributeInfolist;
use App\Filament\Resources\ComponentAttributes\Tables\ComponentAttributesTable;
use App\Models\ComponentAttribute;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ComponentAttributeResource extends Resource
{
    protected static ?string $model = ComponentAttribute::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQueueList;

    protected static UnitEnum|string|null $navigationGroup = 'Form Settings';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return ComponentAttributeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ComponentAttributeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ComponentAttributesTable::configure($table);
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
            'index' => ListComponentAttributes::route('/'),
            'create' => CreateComponentAttribute::route('/create'),
            'view' => ViewComponentAttribute::route('/{record}'),
            'edit' => EditComponentAttribute::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\ComponentEntities;

use App\Filament\Resources\ComponentEntities\Pages\CreateComponentEntity;
use App\Filament\Resources\ComponentEntities\Pages\EditComponentEntity;
use App\Filament\Resources\ComponentEntities\Pages\ListComponentEntities;
use App\Filament\Resources\ComponentEntities\Pages\ViewComponentEntity;
use App\Filament\Resources\ComponentEntities\Schemas\ComponentEntityForm;
use App\Filament\Resources\ComponentEntities\Schemas\ComponentEntityInfolist;
use App\Filament\Resources\ComponentEntities\Tables\ComponentEntitiesTable;
use App\Models\ComponentEntity;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ComponentEntityResource extends Resource
{
    protected static ?string $model = ComponentEntity::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedViewColumns;

    protected static UnitEnum|string|null $navigationGroup = 'Project Management';

    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return ComponentEntityForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ComponentEntityInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ComponentEntitiesTable::configure($table);
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
            'index' => ListComponentEntities::route('/'),
            'create' => CreateComponentEntity::route('/create'),
            'view' => ViewComponentEntity::route('/{record}'),
            'edit' => EditComponentEntity::route('/{record}/edit'),
        ];
    }
}

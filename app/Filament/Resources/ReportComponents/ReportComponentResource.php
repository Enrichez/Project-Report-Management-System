<?php

namespace App\Filament\Resources\ReportComponents;

use App\Filament\Resources\ReportComponents\Pages\CreateReportComponent;
use App\Filament\Resources\ReportComponents\Pages\EditReportComponent;
use App\Filament\Resources\ReportComponents\Pages\ListReportComponents;
use App\Filament\Resources\ReportComponents\Pages\ViewReportComponent;
use App\Filament\Resources\ReportComponents\Schemas\ReportComponentForm;
use App\Filament\Resources\ReportComponents\Schemas\ReportComponentInfolist;
use App\Filament\Resources\ReportComponents\Tables\ReportComponentsTable;
use App\Models\ReportComponent;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReportComponentResource extends Resource
{
    protected static ?string $model = ReportComponent::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    protected static string|UnitEnum|null $navigationGroup = 'Project Management';

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationLabel = 'Records';


    public static function form(Schema $schema): Schema
    {
        return ReportComponentForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ReportComponentInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReportComponentsTable::configure($table);
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
            'index' => ListReportComponents::route('/'),
            'create' => CreateReportComponent::route('/create'),
            'view' => ViewReportComponent::route('/{record}'),
            'edit' => EditReportComponent::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

<?php

namespace App\Filament\Resources\Projects\RelationManagers;

use App\Filament\Resources\Reports\ReportResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ReportsRelationManager extends RelationManager
{
    protected static string $relationship = 'reports';

    protected static ?string $relatedResource = ReportResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ])
            ->columns([
                TextColumn::make('name')->label('Report Name')->searchable()->sortable(),
                TextColumn::make('content')->label('Content')->limit(50),
                TextColumn::make('start_time')->label('Start Time')->dateTime()->sortable(),
                TextColumn::make('end_time')->label('End Time')->dateTime()->sortable(),
            ]);
    }

    public static function canViewForRecord($ownerRecord, string $pageClass): bool
    {
        return $pageClass === \App\Filament\Resources\Projects\Pages\ViewProject::class;
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}

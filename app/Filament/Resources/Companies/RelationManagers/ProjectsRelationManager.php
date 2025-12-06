<?php

namespace App\Filament\Resources\Companies\RelationManagers;

use App\Filament\Resources\Projects\ProjectResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ProjectsRelationManager extends RelationManager
{
    protected static string $relationship = 'projects';

    protected static ?string $relatedResource = ProjectResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ])
            ->columns([
                TextColumn::make('name')->label('Project Name')->searchable()->sortable(),
                TextColumn::make('company.name')->label('Company')->hidden(),
                TextColumn::make('description')->label('Description')->limit(50),
                TextColumn::make('start_date')->label('Start Date')->date()->sortable(),
                TextColumn::make('end_date')->label('End Date')->date()->sortable(),
            ]);
    }

    public static function canViewForRecord($ownerRecord, string $pageClass): bool
    {
        return $pageClass === \App\Filament\Resources\Companies\Pages\ViewCompany::class;
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}

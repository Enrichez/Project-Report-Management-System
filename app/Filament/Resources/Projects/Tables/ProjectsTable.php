<?php

namespace App\Filament\Resources\Projects\Tables;

use Dom\Text;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Project Name')->searchable()->sortable(),
                TextColumn::make('company.name')->label('Company')->searchable()->sortable(),
                TextColumn::make('description')->label('Description')->limit(50),
                TextColumn::make('start_date')->label('Start Date')->date()->sortable(),
                TextColumn::make('end_date')->label('End Date')->date()->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                // BulkActionGroup::make([
                    DeleteBulkAction::make(),
                // ]),
            ]);
    }
}

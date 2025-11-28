<?php

namespace App\Filament\Resources\ReportComponents\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ReportComponentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('report_id')
                    ->label('Report')
                    ->relationship('report', 'name')
                    ->required(),
                Select::make('component_id')
                    ->label('Component')
                    ->relationship('component', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('total_expense')
                    ->required()
                    ->numeric()
                    ->default(0.0),
            ]);
    }
}

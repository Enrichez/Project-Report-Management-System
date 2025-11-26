<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Project Name')
                    ->required()
                    ->maxLength(255),
                Select::make('company_id')
                    ->label('Company')
                    ->relationship('company', 'name')
                    ->required(),
                Textarea::make('description')
                    ->label('Description')
                    ->rows(4)
                    ->maxLength(1000),
                DatePicker::make('start_date')
                    ->label('Start Date')->required(),
                DatePicker::make('end_date')
                    ->label('End Date')
                    ->required(),
            ]);
    }
}

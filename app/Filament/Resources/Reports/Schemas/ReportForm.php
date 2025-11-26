<?php

namespace App\Filament\Resources\Reports\Schemas;

use Filament\Actions\SelectAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ReportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Report Name')
                    ->required()
                    ->maxLength(255),
                Select::make('project_id')
                    ->label('Project')
                    ->relationship('project', 'name')
                    ->required(),
                Textarea::make('content')
                    ->label('Content')
                    ->required()
                    ->maxLength(1000),
                DateTimePicker::make('start_time')
                    ->label('Start Time')
                    ->required(),
                DateTimePicker::make('end_time')
                    ->label('End Time')
                    ->required(),
            ]);
    }
}

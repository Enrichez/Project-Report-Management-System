<?php

namespace App\Filament\Resources\ComponentValues\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ComponentValueForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('entity_id')->label('Component Entity')
                    ->relationship('componentEntity', 'name')
                    ->required(),
                Select::make('attribute_id')->label('Component Attribute')
                    ->relationship('componentAttribute', 'name')
                    ->required(),
                Textarea::make('value_string')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('value_number')
                    ->numeric()
                    ->default(null),
                DatePicker::make('value_date'),
            ]);
    }
}

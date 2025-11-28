<?php

namespace App\Filament\Resources\ComponentAttributes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ComponentAttributeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('component_id')->label('Component')
                    ->relationship('component', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('label')
                    ->required(),
                TextInput::make('qty')
                    ->numeric()
                    ->default(null),
                TextInput::make('unit_price')
                    ->numeric()
                    ->default(null),
                TextInput::make('total_expense')
                    ->numeric()
                    ->default(null),
            ]);
    }
}

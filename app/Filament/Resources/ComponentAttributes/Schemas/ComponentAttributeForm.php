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
                Select::make('report_component_id')
                    ->label('Report')
                    ->relationship('reportcomponent', 'name')
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

<?php

namespace App\Filament\Resources\ComponentEntities\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ComponentEntityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('report_component_id')->label('Report Component')
                    ->relationship('reportComponent', 'name')
                    ->required(),
                Select::make('component_id')->label('Component')
                    ->relationship('component', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('label')
                    ->required(),
                TextInput::make('type')
                    ->required(),
                Textarea::make('value')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}

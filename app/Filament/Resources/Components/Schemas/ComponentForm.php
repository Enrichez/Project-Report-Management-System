<?php

namespace App\Filament\Resources\Components\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ComponentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('total_expense')
                    ->numeric()
                    ->default(0.0),
            ]);
    }
}

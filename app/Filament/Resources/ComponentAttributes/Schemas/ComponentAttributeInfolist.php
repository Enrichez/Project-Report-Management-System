<?php

namespace App\Filament\Resources\ComponentAttributes\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ComponentAttributeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('component_id')
                    ->numeric(),
                TextEntry::make('name'),
                TextEntry::make('label'),
                TextEntry::make('qty')
                    ->numeric(),
                TextEntry::make('unit_price')
                    ->numeric(),
                TextEntry::make('total_expense')
                    ->numeric(),
                TextEntry::make('deleted_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}

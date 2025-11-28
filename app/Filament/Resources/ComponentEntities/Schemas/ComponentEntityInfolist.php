<?php

namespace App\Filament\Resources\ComponentEntities\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ComponentEntityInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('component_id')
                    ->numeric(),
                TextEntry::make('report_component_id')
                    ->numeric(),
                TextEntry::make('name'),
                TextEntry::make('label'),
                TextEntry::make('type'),
                TextEntry::make('deleted_at')
                    ->dateTime(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}

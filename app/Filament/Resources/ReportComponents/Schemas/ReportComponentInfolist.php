<?php

namespace App\Filament\Resources\ReportComponents\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ReportComponentInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('report_id')
                    ->numeric(),
                TextEntry::make('component_id')
                    ->numeric(),
                TextEntry::make('name'),
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

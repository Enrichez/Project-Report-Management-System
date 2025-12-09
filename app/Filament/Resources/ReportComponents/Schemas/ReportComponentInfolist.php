<?php

namespace App\Filament\Resources\ReportComponents\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ViewEntry;
use Filament\Schemas\Components\Section;
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
    // public static function configure(Schema $schema): Schema
    // {
    //     return $schema
    //         ->components([
    //             Section::make('')
    //                 ->schema([
    //                     TextEntry::make('report_id')
    //                         ->numeric(),
    //                     TextEntry::make('component_id')
    //                         ->numeric(),
    //                     TextEntry::make('name'),
    //                     TextEntry::make('total_expense')
    //                         ->numeric(),
    //                     TextEntry::make('deleted_at')
    //                         ->dateTime(),
    //                     TextEntry::make('created_at')
    //                         ->dateTime(),
    //                     TextEntry::make('updated_at')
    //                         ->dateTime(),
    //                 ]),
    //             Section::make('Tabel Rincian')
    //                 ->schema([
    //                     ViewEntry::make('matrix_table')
    //                         ->label('Tabel X')
    //                         ->view('filament.records.record')
    //                 ])
    //                 ->columnSpanFull(),
    //         ]);
    // }
}

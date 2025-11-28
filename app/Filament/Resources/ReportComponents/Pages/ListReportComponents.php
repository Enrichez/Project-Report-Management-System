<?php

namespace App\Filament\Resources\ReportComponents\Pages;

use App\Filament\Resources\ReportComponents\ReportComponentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReportComponents extends ListRecords
{
    protected static string $resource = ReportComponentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

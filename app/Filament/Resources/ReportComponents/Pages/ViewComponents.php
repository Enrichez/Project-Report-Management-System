<?php

namespace App\Filament\Resources\ReportComponents\Pages;

use App\Filament\Resources\ReportComponents\ReportComponentResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewComponents extends ViewRecord
{
    protected static string $resource = ReportComponentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

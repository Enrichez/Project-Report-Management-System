<?php

namespace App\Filament\Resources\ReportComponents\Pages;

use App\Filament\Resources\ReportComponents\ReportComponentResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditReportComponent extends EditRecord
{
    protected static string $resource = ReportComponentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}

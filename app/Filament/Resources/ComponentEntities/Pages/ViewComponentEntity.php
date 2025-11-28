<?php

namespace App\Filament\Resources\ComponentEntities\Pages;

use App\Filament\Resources\ComponentEntities\ComponentEntityResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewComponentEntity extends ViewRecord
{
    protected static string $resource = ComponentEntityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

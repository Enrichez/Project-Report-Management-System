<?php

namespace App\Filament\Resources\ComponentAttributes\Pages;

use App\Filament\Resources\ComponentAttributes\ComponentAttributeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewComponentAttribute extends ViewRecord
{
    protected static string $resource = ComponentAttributeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

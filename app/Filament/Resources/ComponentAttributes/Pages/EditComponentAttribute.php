<?php

namespace App\Filament\Resources\ComponentAttributes\Pages;

use App\Filament\Resources\ComponentAttributes\ComponentAttributeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditComponentAttribute extends EditRecord
{
    protected static string $resource = ComponentAttributeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ComponentValues\Pages;

use App\Filament\Resources\ComponentValues\ComponentValueResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditComponentValue extends EditRecord
{
    protected static string $resource = ComponentValueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

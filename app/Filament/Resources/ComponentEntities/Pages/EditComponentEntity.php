<?php

namespace App\Filament\Resources\ComponentEntities\Pages;

use App\Filament\Resources\ComponentEntities\ComponentEntityResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditComponentEntity extends EditRecord
{
    protected static string $resource = ComponentEntityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}

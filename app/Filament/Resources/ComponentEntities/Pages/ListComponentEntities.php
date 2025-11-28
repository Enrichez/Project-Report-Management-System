<?php

namespace App\Filament\Resources\ComponentEntities\Pages;

use App\Filament\Resources\ComponentEntities\ComponentEntityResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListComponentEntities extends ListRecords
{
    protected static string $resource = ComponentEntityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

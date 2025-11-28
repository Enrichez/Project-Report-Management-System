<?php

namespace App\Filament\Resources\ComponentAttributes\Pages;

use App\Filament\Resources\ComponentAttributes\ComponentAttributeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListComponentAttributes extends ListRecords
{
    protected static string $resource = ComponentAttributeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

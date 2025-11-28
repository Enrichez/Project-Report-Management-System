<?php

namespace App\Filament\Resources\ComponentValues\Pages;

use App\Filament\Resources\ComponentValues\ComponentValueResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListComponentValues extends ListRecords
{
    protected static string $resource = ComponentValueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

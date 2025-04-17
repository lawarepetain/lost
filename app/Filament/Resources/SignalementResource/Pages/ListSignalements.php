<?php

namespace App\Filament\Resources\SignalementResource\Pages;

use App\Filament\Resources\SignalementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSignalements extends ListRecords
{
    protected static string $resource = SignalementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

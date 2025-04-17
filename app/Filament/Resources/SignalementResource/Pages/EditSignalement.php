<?php

namespace App\Filament\Resources\SignalementResource\Pages;

use App\Filament\Resources\SignalementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSignalement extends EditRecord
{
    protected static string $resource = SignalementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ObjetPerduResource\Pages;

use App\Filament\Resources\ObjetPerduResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditObjetPerdu extends EditRecord
{
    protected static string $resource = ObjetPerduResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

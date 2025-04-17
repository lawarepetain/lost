<?php

namespace App\Filament\Resources\ObjetPerduResource\Pages;

use App\Filament\Resources\ObjetPerduResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListObjetPerdus extends ListRecords
{
    protected static string $resource = ObjetPerduResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

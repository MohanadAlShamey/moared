<?php

namespace App\Filament\Resources\LnagResource\Pages;

use App\Filament\Resources\LnagResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLnags extends ListRecords
{
    protected static string $resource = LnagResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

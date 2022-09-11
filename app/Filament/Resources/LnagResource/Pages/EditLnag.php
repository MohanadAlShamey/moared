<?php

namespace App\Filament\Resources\LnagResource\Pages;

use App\Filament\Resources\LnagResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLnag extends EditRecord
{
    protected static string $resource = LnagResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

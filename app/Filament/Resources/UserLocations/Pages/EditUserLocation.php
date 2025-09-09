<?php

namespace App\Filament\Resources\UserLocations\Pages;

use App\Filament\Resources\UserLocations\UserLocationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUserLocation extends EditRecord
{
    protected static string $resource = UserLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

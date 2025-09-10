<?php

namespace App\Filament\Resources\ProductTypes\Pages;

use App\Filament\Resources\ProductTypes\ProductTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductType extends EditRecord
{
    protected static string $resource = ProductTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
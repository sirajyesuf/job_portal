<?php

namespace App\Filament\Resources\DataResource\Pages;

use App\Filament\Resources\DataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListData extends ListRecords
{
    protected static string $resource = DataResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}

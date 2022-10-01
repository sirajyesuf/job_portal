<?php

namespace App\Filament\Resources\FeaturePlanResource\Pages;

use App\Filament\Resources\FeaturePlanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeaturePlans extends ListRecords
{
    protected static string $resource = FeaturePlanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

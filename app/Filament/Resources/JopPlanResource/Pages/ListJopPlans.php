<?php

namespace App\Filament\Resources\JopPlanResource\Pages;

use App\Filament\Resources\JopPlanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJopPlans extends ListRecords
{
    protected static string $resource = JopPlanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

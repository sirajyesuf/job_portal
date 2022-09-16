<?php

namespace App\Filament\Resources\JopPlanResource\Pages;

use App\Filament\Resources\JopPlanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewJopPlan extends ViewRecord
{
    protected static string $resource = JopPlanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

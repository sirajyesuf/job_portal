<?php

namespace App\Filament\Resources\FeaturePlanResource\Pages;

use App\Filament\Resources\FeaturePlanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFeaturePlan extends ViewRecord
{
    protected static string $resource = FeaturePlanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\FeaturePlanResource\Pages;

use App\Filament\Resources\FeaturePlanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeaturePlan extends EditRecord
{
    protected static string $resource = FeaturePlanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

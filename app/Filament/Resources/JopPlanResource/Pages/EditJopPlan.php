<?php

namespace App\Filament\Resources\JopPlanResource\Pages;

use App\Filament\Resources\JopPlanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJopPlan extends EditRecord
{
    protected static string $resource = JopPlanResource::class;

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

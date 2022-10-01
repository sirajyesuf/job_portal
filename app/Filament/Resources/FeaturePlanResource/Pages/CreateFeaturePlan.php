<?php

namespace App\Filament\Resources\FeaturePlanResource\Pages;

use App\Enums\PlanType;
use App\Filament\Resources\FeaturePlanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFeaturePlan extends CreateRecord
{
    protected static string $resource = FeaturePlanResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type'] = PlanType::Featuring()->value;
        return $data;
        
    }
}

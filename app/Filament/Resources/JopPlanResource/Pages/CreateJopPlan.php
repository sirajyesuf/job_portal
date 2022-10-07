<?php

namespace App\Filament\Resources\JopPlanResource\Pages;

use App\Enums\PlanType;
use App\Filament\Resources\JopPlanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJopPlan extends CreateRecord
{
    protected static string $resource = JopPlanResource::class;
     
}

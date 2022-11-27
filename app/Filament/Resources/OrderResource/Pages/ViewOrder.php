<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\EmployerResource;
use App\Filament\Resources\OrderResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOrder extends ViewRecord
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderWidgets(): array
    {
        return [
            OrderResource\Widgets\EmployerOverview::class,
            OrderResource\Widgets\OrderOverview::class,
            OrderResource\Widgets\PlanOverview::class
        ];
    }

    protected function getActions(): array
    {
        return [];
    }

}

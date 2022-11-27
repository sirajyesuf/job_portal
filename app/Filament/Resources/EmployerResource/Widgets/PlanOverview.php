<?php

namespace App\Filament\Resources\EmployerResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;

class PlanOverview extends Widget
{
    protected static string $view = 'filament.resources.employer-resource.widgets.plan-overview';
    public ?Model $record = null;

}

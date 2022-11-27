<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;

class PlanOverview extends Widget
{
    protected static string $view = 'filament.resources.order-resource.widgets.plan-overview';
    public ?Model $record = null;

}

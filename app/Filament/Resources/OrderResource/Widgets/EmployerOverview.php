<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;
class EmployerOverview extends Widget
{
    protected static string $view = 'filament.resources.order-resource.widgets.employer-overview';
    public ?Model $record = null;
    protected int | string | array $columnSpan = 'full';


}

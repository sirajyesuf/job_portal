<?php

namespace App\Filament\Resources\EmployerResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;
 

class EmployerOverview extends Widget
{
    protected static string $view = 'filament.resources.employer-resource.widgets.employer-overview';
    public ?Model $record = null;
    protected int | string | array $columnSpan = 2;


    
    
}

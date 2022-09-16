<?php

namespace App\Filament\Resources\JobResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
                Card::make('Number Click', '192.1k'),
                Card::make('Number Proposals', '21%'),
        ];
    }
}

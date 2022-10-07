<?php

namespace App\Filament\Resources\EmployerResource\Pages;

use App\Enums\UserStatus;
use App\Filament\Resources\EmployerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use PhpOption\Option;
use Spatie\LaravelOptions\Options;
use STS\FilamentImpersonate;

class ListEmployers extends ListRecords
{
    protected static string $resource = EmployerResource::class;


    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),

        ];
    }


    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name'),
            Tables\Columns\TextColumn::make('email')


        ];
    }

    protected function getTableFilters(): array
    {

        return [
          Tables\Filters\SelectFilter::make('status')
          ->options(collect(Options::forEnum(UserStatus::class))->pluck('label','value')->toArray())
        ];
    }


}

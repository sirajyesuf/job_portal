<?php

namespace App\Filament\Resources\EducationResource\Pages;

use App\Filament\Resources\EducationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEducation extends ManageRecords
{
    protected static string $resource = EducationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

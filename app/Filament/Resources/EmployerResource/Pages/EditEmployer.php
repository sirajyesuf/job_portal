<?php

namespace App\Filament\Resources\EmployerResource\Pages;

use App\Filament\Resources\EmployerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployer extends EditRecord
{
    protected static string $resource = EmployerResource::class;

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name'),
            Forms\Components\TextInput::make('email'),


        ];
    }

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

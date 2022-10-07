<?php

namespace App\Filament\Resources\EmployerResource\Pages;

use App\Filament\Resources\EmployerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms;
use Illuminate\Support\Facades\Hash;
class EditEmployer extends EditRecord
{
    protected static string $resource = EmployerResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['password'] =  Hash::make($data['password']);

        return $data;

    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
            ->required(),
            Forms\Components\TextInput::make('email')
            ->required(),
            Forms\Components\TextInput::make('password')
            ->required()
            ->password(),
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

    protected function getTableEmptyStateHeading(): ?string
    {
        return 'No company profile yet';
    }
}

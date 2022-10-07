<?php

namespace App\Filament\Resources\EmployerResource\Pages;

use App\Filament\Resources\EmployerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms;
use Illuminate\Support\Facades\Hash;

class CreateEmployer extends CreateRecord
{
    protected static string $resource = EmployerResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['password'] = Hash::make($data['password']);

        return $data;

    }

    // protected function afterCreate(){



    // }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
            ->label('full name')
            ->required(),
            Forms\Components\TextInput::make('email')
            ->label('email address')
            ->required()
            ->unique(),
            Forms\Components\TextInput::make('password')
            ->required()
            ->password(),
        ];
    }
}

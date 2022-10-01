<?php

namespace App\Filament\Resources\EmployerResource\Pages;

use App\Enums\UserStatus;
use App\Filament\Resources\EmployerResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms;


class ViewEmployer extends ViewRecord
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
            // Actions\EditAction::make(),
            Actions\Action::make('Approve')
            ->requiresConfirmation()
            ->action('approveEmployer')
            ->color('success')
            ->hidden($this->record->status == UserStatus::Approve()->value),
            Actions\Action::make('Rejecte')
            ->requiresConfirmation()
            ->action('rejecteEmployer')
            ->color('danger')
            ->hidden($this->record->status == UserStatus::Rejecte()->value),
        ];
    }


    public function approveEmployer()
    {
        
    $this->record->update([
    'status' => UserStatus::Approve()->value
    ]);

    Notification::make()
    ->title('the employer succesfully approved.')
    ->success()
    ->send();

    redirect()->to( $this->getResource()::getUrl('view',$this->record));



    }

    public function rejecteEmployer()
    {

        $this->record->update([
            'status' => UserStatus::Rejecte()->value
        ]);
        
        Notification::make()
            ->title('the employer succesfully rejected.')
            ->success()
            ->send();

        
        redirect()->to( $this->getResource()::getUrl('view',$this->record));



    }
}

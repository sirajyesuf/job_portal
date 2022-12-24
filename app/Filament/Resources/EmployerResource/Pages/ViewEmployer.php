<?php

namespace App\Filament\Resources\EmployerResource\Pages;

use App\Enums\UserStatus;
use App\Filament\Resources\EmployerResource;
use Filament\Notifications\Notification;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms;
use STS\FilamentImpersonate\Impersonate;


class ViewEmployer extends ViewRecord
{
    protected static string $resource = EmployerResource::class;

 

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()
            ->visible($this->record->status == UserStatus::Rejecte()->value),
            Actions\Action::make('Impersonate')
            ->action(function () {
                Impersonate::impersonate($this->record);
            }),
            Actions\Action::make('Approve')
            ->requiresConfirmation()
            ->action('approveEmployer')
            ->color('success')
            ->visible($this->record->status == UserStatus::Pending()->value and  $this->record->employerProfile),
            Actions\Action::make('Rejecte')
            ->requiresConfirmation()
            ->action('rejecteEmployer')
            ->color('danger')
            ->visible($this->record->status == UserStatus::Pending()->value  and $this->record->employerProfile),
            Actions\Action::make('Block')
            ->requiresConfirmation()
            ->action('blockEmployer')
            ->color('danger')
            ->visible($this->record->status == UserStatus::Approve()->value  and  $this->record->employerProfile),
            Actions\Action::make('UnBlock')
            ->label('Unblock')
            ->requiresConfirmation()
            ->action('unBlockEmployer')
            ->color('success')
            ->visible($this->record->status == UserStatus::Block()->value  and  $this->record->employerProfile),
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
    public function unBlockEmployer()
    {

    $this->record->update([
    'status' => UserStatus::Approve()->value
    ]);

    Notification::make()
    ->title('the employer succesfully unblocked.')
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


    public function blockEmployer(){
        $this->record->update([
            'status' => UserStatus::Block()->value
        ]);

        Notification::make()
        ->title('the employer succesfully Blocked.')
        ->success()
        ->send();

        $notification = new \MBarlow\Megaphone\Types\Important(
            'Sorry! you are blocked',
            'We saw unappropriate thing in your account so we blocked you.pls contact our  support!',
        );

        $this->record->notify($notification);


        redirect()->to( $this->getResource()::getUrl('view',$this->record));




        
    }

    protected function getHeaderWidgets(): array
    {
        return [
            EmployerResource\Widgets\EmployerStatus::class,
            EmployerResource\Widgets\PlanOverview::class,
            EmployerResource\Widgets\EmployerOverview::class

        ];
    }

  
}

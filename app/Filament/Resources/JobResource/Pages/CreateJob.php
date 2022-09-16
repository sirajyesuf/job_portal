<?php

namespace App\Filament\Resources\JobResource\Pages;

use App\Enums\JobType;
use App\Filament\Resources\JobResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Pages\Actions\Action;
use Filament\Notifications\Notification;

class CreateJob extends CreateRecord
{
    protected static string $resource = JobResource::class;

    protected function getDraftedNotificationMessage()
    {

        return "Drafted";

    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = auth()->user()->id;
        $data['type'] = JobType::Company()->value;
        return $data;
    }

    protected function getCreateFormAction(): Action
    {
        return Action::make('create')
            ->label('Publishe')
            ->submit('create')
            ->keyBindings(['mod+s']);
    }

    protected function getFormActions(): array
    {
        return array_merge(
            [$this->getCreateFormAction()],
            [Action::make('Draft')->action('draft')],
            [$this->getCancelFormAction()]
        );
    }

    public function draft(bool $another = false): void
    {
        $this->authorizeAccess();

        $this->callHook('beforeValidate');

        $data = $this->form->getState();

        $data['is_published'] = false;
        
        $this->callHook('afterValidate');

        $data = $this->mutateFormDataBeforeCreate($data);

        $this->callHook('beforeCreate');

        $this->record = $this->handleRecordCreation($data);

        $this->form->model($this->record)->saveRelationships();

        $this->callHook('afterCreate');

        if (filled($this->getDraftedNotificationMessage())) {
            Notification::make()
                ->title($this->getDraftedNotificationMessage())
                ->success()
                ->send();
        }

        if ($another) {
            // Ensure that the form record is anonymized so that relationships aren't loaded.
            $this->form->model($this->record::class);
            $this->record = null;

            $this->fillForm();

            return;
        }

        $this->redirect($this->getRedirectUrl());
    }

    
}

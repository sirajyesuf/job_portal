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


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = auth()->user()->id;
        $data['type'] = JobType::Company()->value;
        return $data;
    }

   



 

    
}

<?php

namespace App\Filament\Resources\JobResource\Pages;

use App\Filament\Resources\JobResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Pages\Actions\Action;
use Filament\Notifications\Notification; 


class ViewJob extends ViewRecord
{
    protected static string $resource = JobResource::class;
    public $record;


    protected function getHeaderWidgets(): array
    {
        return [
            JobResource\Widgets\StatsOverview::class,
        ];
    }


    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
            Action::make('draft')
            ->label('Draft')
            ->action('draft')
            ->visible($this->record->is_published),
            Action::make('publishe')
            ->label('Publishe')
            ->action('publishe')
            ->visible(!$this->record->is_published),

        ];
    }


    public function publishe(){


        $this->record->update([
            'is_published' => true
        ]);

        Notification::make() 
        ->title('Published successfully')
        ->success()
        ->send();
        
        return redirect()->to( $this->getResource()::getUrl('view',$this->record));


    }

    public function draft(){

        $this->record->update([
            'is_published' => false
        ]);
        
        Notification::make() 
        ->title('Drafted successfully')
        ->success()
        ->send();

        return redirect()->to( $this->getResource()::getUrl('view',$this->record));

    }

}

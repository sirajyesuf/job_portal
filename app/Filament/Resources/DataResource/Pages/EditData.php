<?php

namespace App\Filament\Resources\DataResource\Pages;

use App\Filament\Resources\DataResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditData extends EditRecord
{
    protected static string $resource = DataResource::class;

    protected function getTitle(): string
    {
        // if (filled(static::$title)) {
        //     return static::$title;
        // }

        // return __('filament::resources/pages/edit-record.title', [
        //     'label' => $this->getRecordTitle(),
        // ]);

        // dump($this->data);

        return  $this->data['name'];
    }
    protected function getActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

    protected function getFormActions(): array
    {
        return [
            // $this->getSaveFormAction(),
            // $this->getCancelFormAction(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TracerStudy\Pages;

use App\Filament\Resources\TracerStudy\TracerStudyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTracerStudy extends EditRecord
{
    protected static string $resource = TracerStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

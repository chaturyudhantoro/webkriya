<?php

namespace App\Filament\Resources\TracerStudy\Pages;

use App\Filament\Resources\TracerStudy\TracerStudyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTracerStudies extends ListRecords
{
    protected static string $resource = TracerStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TracerStudy;

use App\Filament\Resources\TracerStudy\Pages\CreateTracerStudy;
use App\Filament\Resources\TracerStudy\Pages\EditTracerStudy;
use App\Filament\Resources\TracerStudy\Pages\ListTracerStudies;
use App\Filament\Resources\TracerStudy\Schemas\TracerStudyForm;
use App\Filament\Resources\TracerStudy\Tables\TracerStudyTable;
use App\Models\TracerStudy;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TracerStudyResource extends Resource
{
    protected static ?string $model = TracerStudy::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAcademicCap;

    protected static ?string $navigationLabel = 'Tracer Study';
    protected static ?string $pluralModelLabel = 'Tracer Study';
    protected static ?string $modelLabel = 'Tracer Study';

    public static function form(Schema $schema): Schema
    {
        return TracerStudyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TracerStudyTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTracerStudies::route('/'),
            'create' => CreateTracerStudy::route('/create'),
            'edit' => EditTracerStudy::route('/{record}/edit'),
        ];
    }
}

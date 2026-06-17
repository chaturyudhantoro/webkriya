<?php

namespace App\Filament\Resources\Teacher;

use App\Filament\Resources\Teacher\Pages\CreateTeacher;
use App\Filament\Resources\Teacher\Pages\EditTeacher;
use App\Filament\Resources\Teacher\Pages\ListTeachers;
use App\Filament\Resources\Teacher\Schemas\TeacherForm;
use App\Filament\Resources\Teacher\Tables\TeacherTable;
use App\Models\Teacher;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUsers;

    protected static ?string $navigationLabel = 'Guru & Staff';
    protected static ?string $pluralModelLabel = 'Guru & Staff';
    protected static ?string $modelLabel = 'Guru & Staff';

    public static function form(Schema $schema): Schema
    {
        return TeacherForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeacherTable::configure($table);
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
            'index' => ListTeachers::route('/'),
            'create' => CreateTeacher::route('/create'),
            'edit' => EditTeacher::route('/{record}/edit'),
        ];
    }
}

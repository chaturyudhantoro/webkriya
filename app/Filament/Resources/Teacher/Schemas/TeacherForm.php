<?php

namespace App\Filament\Resources\Teacher\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class TeacherForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('nip')
                    ->label('NIP (18 Digit)')
                    ->length(18)
                    ->unique(ignoreRecord: true),
                TextInput::make('position')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., Guru Produktif Multimedia'),
                Select::make('major_id')
                    ->relationship('major', 'name')
                    ->label('Kompetensi Keahlian / Jurusan')
                    ->nullable(),
                Toggle::make('is_featured')
                    ->label('Tampilkan di Beranda')
                    ->default(false),
                FileUpload::make('photo_path')
                    ->image()
                    ->label('Foto Resmi')
                    ->directory('teachers-photos'),
            ]);
    }
}

<?php

namespace App\Filament\Resources\TracerStudy\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TracerStudyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('graduation_year')
                    ->required()
                    ->numeric()
                    ->placeholder('e.g., 2024'),
                Select::make('major_id')
                    ->relationship('major', 'name')
                    ->required()
                    ->label('Jurusan'),
                Select::make('status')
                    ->options([
                        'bekerja' => 'Bekerja',
                        'kuliah' => 'Kuliah',
                        'wirausaha' => 'Wirausaha',
                        'mencari_kerja' => 'Mencari Kerja',
                    ])
                    ->required()
                    ->native(false),
                KeyValue::make('details')
                    ->label('Detail Pekerjaan / Pendidikan')
                    ->helperText('Masukkan informasi seperti Nama Perusahaan/Universitas, Posisi/Jurusan, dll.')
                    ->columnSpanFull(),
                TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                TextInput::make('whatsapp_number')
                    ->maxLength(255),
                Textarea::make('testimonials')
                    ->label('Testimoni Sekolah')
                    ->columnSpanFull()
                    ->maxLength(1000),
            ]);
    }
}

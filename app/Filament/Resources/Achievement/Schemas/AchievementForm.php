<?php

namespace App\Filament\Resources\Achievement\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class AchievementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', str()->slug($state)) : null),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Select::make('category')
                    ->options([
                        'Nasional' => 'Nasional',
                        'Provinsi' => 'Provinsi',
                        'Kabupaten' => 'Kabupaten/Kota',
                        'Regional' => 'Regional/Sekolah',
                    ])
                    ->required()
                    ->native(false),
                DatePicker::make('date')
                    ->required()
                    ->label('Tanggal Perolehan'),
                TextInput::make('winner_name')
                    ->label('Nama Pemenang / Peraih')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g., Fajar Ramadhan (XII Kriya Kayu)'),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(1000),
                FileUpload::make('image_path')
                    ->image()
                    ->label('Foto Dokumentasi')
                    ->directory('achievements-images'),
            ]);
    }
}

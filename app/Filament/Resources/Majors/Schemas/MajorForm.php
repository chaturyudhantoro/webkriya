<?php

namespace App\Filament\Resources\Majors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Schema;

class MajorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                ColorPicker::make('accent_color')
                    ->required(),
                TextInput::make('icon')
                    ->required()
                    ->placeholder('e.g., wood-craft'),
                Repeater::make('curriculum')
                    ->simple(
                        TextInput::make('subject')
                            ->required()
                            ->placeholder('e.g., Desain Komunikasi Visual')
                    )
                    ->columnSpanFull()
                    ->label('Mata Pelajaran Kurikulum'),
                TextInput::make('meta_title')
                    ->maxLength(255),
                Textarea::make('meta_description')
                    ->columnSpanFull()
                    ->maxLength(500),
            ]);
    }
}

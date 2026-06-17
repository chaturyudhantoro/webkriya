<?php

namespace App\Filament\Resources\Achievement;

use App\Filament\Resources\Achievement\Pages\CreateAchievement;
use App\Filament\Resources\Achievement\Pages\EditAchievement;
use App\Filament\Resources\Achievement\Pages\ListAchievements;
use App\Filament\Resources\Achievement\Schemas\AchievementForm;
use App\Filament\Resources\Achievement\Tables\AchievementTable;
use App\Models\Achievement;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AchievementResource extends Resource
{
    protected static ?string $model = Achievement::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTrophy;

    protected static ?string $navigationLabel = 'Prestasi';
    protected static ?string $pluralModelLabel = 'Prestasi';
    protected static ?string $modelLabel = 'Prestasi';

    public static function form(Schema $schema): Schema
    {
        return AchievementForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AchievementTable::configure($table);
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
            'index' => ListAchievements::route('/'),
            'create' => CreateAchievement::route('/create'),
            'edit' => EditAchievement::route('/{record}/edit'),
        ];
    }
}

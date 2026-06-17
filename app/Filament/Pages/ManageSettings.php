<?php

namespace App\Filament\Pages;

use App\Models\SchoolSetting;
use BackedEnum;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Pages\Page;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;

class ManageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Pengaturan Sekolah';
    protected static ?string $title = 'Pengaturan Sekolah';
    protected string $view = 'filament.pages.manage-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = SchoolSetting::firstOrCreate([], [
            'website_name' => 'WEBKRIYA MODERN SCHOOL',
            'academic_year' => '2026',
            'opening_hours' => 'Senin - Jumat, 07:00 - 15:00',
            'address' => 'Jl. Kriya Modern No. 26 Surakarta, Indonesia',
            'google_maps_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.084705116743!2d110.8252277!3d-7.5657457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMzMnNTYuNyJTIDExMMKwNDknMzAuOCJF!5e0!3m2!1sid!2sid!4v1625000000000',
        ]);

        $this->form->fill($settings->toArray());
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('website_name')
                    ->label('Nama Website')
                    ->required(),
                TextInput::make('academic_year')
                    ->label('Tahun Akademik / Logo')
                    ->required()
                    ->helperText('Tahun yang tampil di sebelah kanan logo atas website (contoh: 2026)'),
                TextInput::make('opening_hours')
                    ->label('Jam Buka Sekolah')
                    ->required(),
                Textarea::make('address')
                    ->label('Alamat Sekolah')
                    ->required()
                    ->rows(3),
                Textarea::make('google_maps_url')
                    ->label('Google Maps (Iframe Embed URL)')
                    ->helperText('Masukkan URL dari tag src iframe Google Maps (misal: https://www.google.com/maps/embed?...)')
                    ->rows(4),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Simpan Perubahan')
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $settings = SchoolSetting::firstOrNew([]);
        $settings->fill($this->form->getState());
        $settings->save();

        // Clear cache
        \Illuminate\Support\Facades\Cache::forget('school_settings');

        Notification::make()
            ->title('Pengaturan berhasil disimpan!')
            ->success()
            ->send();
    }
}

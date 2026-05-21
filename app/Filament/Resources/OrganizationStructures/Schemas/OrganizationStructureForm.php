<?php

namespace App\Filament\Resources\OrganizationStructures\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;

class OrganizationStructureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        ->components([
            TextInput::make('department_name')
                ->label('Nama Departemen')
                ->placeholder('Contoh: Pengurus Harian')
                ->required(),

            Repeater::make('members')
                ->label('Daftar Anggota')
                ->schema([
                    FileUpload::make('photo')
                        ->label('Foto')
                        ->image()
                        ->directory('organization')
                        ->columnSpanFull(),

                    TextInput::make('name')
                        ->label('Nama Lengkap')
                        ->required(),

                    TextInput::make('position')
                        ->label('Posisi / Jabatan')
                        ->placeholder('Contoh: Ketua Departemen / Staff')
                        ->required(),

                    TextInput::make('prodi')
                        ->label('Program Studi')
                        ->placeholder('Fisika')
                        ->required(),
                        

                    TextInput::make('instagram')
                        ->label('Instagram')
                        ->prefix('@')
                        ->placeholder('username'),
                ])
                ->columns(2)
                ->addActionLabel('Tambah Anggota Baru')
                ->itemLabel(fn (array $state): ?string => $state['name'] ?? 'Anggota Baru'),
        ]);
    }
}

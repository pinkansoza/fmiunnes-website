<?php

namespace App\Filament\Resources\LinkServices\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;

class LinkServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Layanan'),
                TextColumn::make('url')
                    ->label('Link Aktif')
                    ->limit(50),
                TextColumn::make('tulisan_tombol')
                    ->label('Tulisan Tombol')
                    ->default('Isi Formulir'),
            ])
            ->actions([
                EditAction::make(), 
                DeleteAction::make(),
            ]);
    }
}
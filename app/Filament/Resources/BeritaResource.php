<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Berita;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card; 
use Filament\Forms\Components\TextArea; 
use Filament\Forms\Components\TextInput; 
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker; 
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BeritaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BeritaResource\RelationManagers;
use Filament\Forms\Components\FileUpload;


class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('author')->required(),
                        DatePicker::make('date')
                        ->required()
                        ->label('Tanggal')
                        ->format('Y-m-d'), 
                        TextInput::make('title')->required(),
                        TextArea::make('content')->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author')
                ->label('Penulis')
                ->sortable()
                ->searchable(),
            TextColumn::make('date')
                ->label('Tanggal')
                ->sortable(),
            TextColumn::make('title')
                ->label('Judul')
                ->searchable(),
            TextColumn::make('content')
                ->label('Isi Berita')
                ->limit(50) 
                ->tooltip(fn ($record) => $record->content),     
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Filament\Resources\DocumentResource\RelationManagers;
use App\Models\Document;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-c-arrow-left-start-on-rectangle';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titulo')
                    ->required(true)
                    ->placeholder('Titulo'),
                Forms\Components\Textarea::make('descripcion')
                    ->required(true)
                    ->placeholder('Decripcion'),
                Forms\Components\FileUpload::make('archivo_pdf')
                    ->required(true)
                    ->placeholder('Archivo PDF')
                    ->preservefilenames(),
                Forms\Components\Select::make('tipo_id')
                    ->relationship('type', 'Nombre')
                    ->required(true)
                    ->placeholder('Tipo de Documento'),
                Forms\Components\Select::make('categoria_id')
                    ->relationship('category', 'Nombre')
                    ->required(true)
                    ->placeholder('Catgoria')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('descripcion'),
                Tables\Columns\TextColumn::make('archivo_pdf'),
                Tables\Columns\TextColumn::make('type.nombre')->sortable(),
                Tables\Columns\TextColumn::make('category.nombre')->sortable()
            ])
            ->filters([
                //Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

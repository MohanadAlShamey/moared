<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartResource\Pages;
use App\Filament\Resources\PartResource\RelationManagers;
use App\Models\Part;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartResource extends Resource
{
    protected static ?string $model = Part::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $label='مجموعة';
    protected static ?string $modelLabel='مجموعة';
    protected static ?string $pluralLabel='المجموعات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('')->schema([

                    Forms\Components\Tabs::make('parts')->tabs([
                        Forms\Components\Tabs\Tab::make('العربية')->schema([

                            Forms\Components\TextInput::make('name_ar')->required()->label('الاسم'),

                        ]),
                        Forms\Components\Tabs\Tab::make('الإنكليزية')->schema([

                            Forms\Components\TextInput::make('name_en')->required()->label('الاسم'),

                        ]),

                        Forms\Components\Tabs\Tab::make('التركية')->schema([

                            Forms\Components\TextInput::make('name_tr')->required()->label('الاسم'),

                        ]),

                    ]),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_ar')->label('الاسم بالعربية')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('name_en')->label('الاسم بالإنكليزية')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('name_tr')->label('الاسم بالتركية')->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListParts::route('/'),
            'create' => Pages\CreatePart::route('/create'),
            'edit' => Pages\EditPart::route('/{record}/edit'),
        ];
    }
}

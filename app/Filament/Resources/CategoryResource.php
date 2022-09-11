<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $label='قسم';
    protected static ?string $modelLabel='قسم';protected static ?string $pluralLabel='الأقسام';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
          Forms\Components\Section::make('')->schema([
              SpatieMediaLibraryFileUpload::make('img')->collection('categories')->label('الصورة'),
              Forms\Components\Tabs::make('categories')->tabs([
                  Forms\Components\Tabs\Tab::make('العربية')->schema([

                      Forms\Components\TextInput::make('name_ar')->required()->label('الاسم'),
                      Forms\Components\RichEditor::make('info_ar')->nullable()->label('الوصف')
                  ]),
                  Forms\Components\Tabs\Tab::make('الإنكليزية')->schema([

                      Forms\Components\TextInput::make('name_en')->required()->label('الاسم'),
                      Forms\Components\RichEditor::make('info_en')->nullable()->label('الوصف')
                  ]),

                  Forms\Components\Tabs\Tab::make('التركية')->schema([

                      Forms\Components\TextInput::make('name_tr')->required()->label('الاسم'),
                      Forms\Components\RichEditor::make('info_tr')->nullable()->label('الوصف')
                  ]),

              ]),
          ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_ar')->label('الاسم بالعربية')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('name_en')->label('الاسم بالإنكليزية')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('name_tr')->label('الاسم بالتركية')->sortable()->searchable(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('categories'),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}

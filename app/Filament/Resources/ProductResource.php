<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ProductResource extends Resource
{
    protected static ?string $model = \App\Models\Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
protected static ?string $label="المنتج";
protected static ?string $pluralLabel="المنتجات";
protected static ?string $modelLabel="المنتجات";
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(self::$pluralLabel)->schema([
                    SpatieMediaLibraryFileUpload::make('img')->collection('products')->label('الصورة'),
                    TextArea::make('video')->nullable()->label('فيديو من يوتيوب'),
                    Forms\Components\Tabs::make('products')->tabs([

                        Forms\Components\Tabs\Tab::make('العربية')->schema([
                            Forms\Components\TextInput::make('title_ar')->label('العنوان')->required(),


                            TinyEditor::make('info_ar')->label('المقالة'),



                        ]),

                        Forms\Components\Tabs\Tab::make('الإنكليزية')->schema([
                            Forms\Components\TextInput::make('title_en')->label('العنوان')->required(),
                            TinyEditor::make('info_en')->label('المقالة'),


                        ]),

                        Forms\Components\Tabs\Tab::make('التركية')->schema([
                            Forms\Components\TextInput::make('title_tr')->label('العنوان'),
                            TinyEditor::make('info_tr')->label('المقالة'),


                        ]),

                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_ar')->label('العنوان بالعربي')->searchable()->sortable(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('products'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}

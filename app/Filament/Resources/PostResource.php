<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Components\Textarea;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $label='مقالة';
    protected static ?string $modelLabel='مقالة';
    protected static ?string $pluralLabel='المقالات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
          Forms\Components\Section::make(self::$pluralLabel)->schema([
              SpatieMediaLibraryFileUpload::make('img')->collection('posts')->label('الصورة'),
              Forms\Components\BelongsToSelect::make('category_id')->relationship('category','name_ar')->label('القسم'),
              TextArea::make('video')->nullable()->label('فيديو من يوتيوب'),
              Forms\Components\Tabs::make('posts')->tabs([

                  Forms\Components\Tabs\Tab::make('العربية')->schema([
                      Forms\Components\TextInput::make('title_ar')->label('العنوان')->required(),


                      TinyEditor::make('info_ar')->label('المقالة'),



                  ]),

                  Forms\Components\Tabs\Tab::make('الإنكليزية')->schema([
                      Forms\Components\TextInput::make('title_en')->label('العنوان')->reactive()->afterStateUpdated(function (Closure $set, $state) {
                          $set('slug', Str::slug($state));
                      })->required(),
                      Forms\Components\TextInput::make('slug')->required(),
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
                Tables\Columns\TextColumn::make('slug')->label('slug'),
                Tables\Columns\TextColumn::make('category.name_ar')->sortable()->label('القسم'),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('posts'),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}

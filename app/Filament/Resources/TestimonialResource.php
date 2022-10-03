<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Filament\Resources\TestimonialResource\RelationManagers;
use App\Models\Testimonial;
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

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
protected static ?string $label='قالوا عنا';
protected static ?string $modelLabel='قالوا عنا';
protected static ?string $pluralLabel='قالوا عنا';
    public static function form(Form $form): Form
    {

          return $form
              ->schema([
                  Forms\Components\Section::make(self::$pluralLabel)->schema([
//                      SpatieMediaLibraryFileUpload::make('img')->collection('testimonials')->label('الصورة'),
                      Forms\Components\Tabs::make('testimonials')->tabs([

                          Forms\Components\Tabs\Tab::make('العربية')->schema([
                              Forms\Components\TextInput::make('name_ar')->label('اسم الجهة')->required(),


                              Forms\Components\Textarea::make('info_ar')->label('المقالة'),



                          ]),

                          Forms\Components\Tabs\Tab::make('الإنكليزية')->schema([
                              Forms\Components\TextInput::make('name_en')->label('اسم الجهة')/*->reactive()->afterStateUpdated(function (Closure $set, $state) {
                                  $set('slug', Str::slug($state));
                              })*/->required(),
                             // Forms\Components\TextInput::make('slug')->required(),
                              Forms\Components\Textarea::make('info_en')->label('المقالة'),


                          ]),

                          Forms\Components\Tabs\Tab::make('التركية')->schema([
                              Forms\Components\TextInput::make('name_tr')->label('اسم الجهة'),
                              Forms\Components\Textarea::make('info_tr')->label('المقالة'),


                          ]),

                      ])
                  ])
              ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
              Tables\Columns\TextColumn::make('name_ar')->label('اسم الجهة'),
              Tables\Columns\TextColumn::make('info_ar')->label('المقالة')->limit(40),

//                SpatieMediaLibraryImageColumn::make('الصورة')->collection('testimonials'),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}

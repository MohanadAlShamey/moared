<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Filament\Resources\SliderResource\RelationManagers;
use App\Models\Slider;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $label='إعلان';
    protected static ?string $modelLabel='إعلان';
    protected static ?string $pluralLabel='الإعلانات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('')->schema([
                    SpatieMediaLibraryFileUpload::make('img')->collection('sliders')->label('الصورة'),
                    Forms\Components\Textarea::make('caption_ar')->label('الوصف باللغة العربية')->nullable(),
                    Forms\Components\Textarea::make('caption_en')->label('الوصف باللغة الإنكليزية')->nullable(),
                    Forms\Components\Textarea::make('caption_tr')->label('الوصف باللغة التركية')->nullable(),


                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('caption_ar')->label('وصف الإعلان'),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('sliders'),
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}

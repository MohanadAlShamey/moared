<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Faker\Provider\Text;
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
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $label='الإعدادات';
    protected static ?string $modelLabel='الإعدادات';
    protected static ?string $pluralLabel='الإعدادات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(self::$pluralLabel)->schema([
                    SpatieMediaLibraryFileUpload::make('img')->collection('settings')->label('الصورة'),
                    SpatieMediaLibraryFileUpload::make('about')->collection('abouts')->label('صورة من نحن'),
                    Forms\Components\Tabs::make('posts')->tabs([

                        Forms\Components\Tabs\Tab::make('العربية')->schema([
                            Forms\Components\TextInput::make('name_ar')->label('اسم الموقع')->required(),



                            Forms\Components\TextInput::make('address_ar')->label('العنوان'),
                            TinyEditor::make('info_ar')->label('من نحن'),


                        ]),

                        Forms\Components\Tabs\Tab::make('الإنكليزية')->schema([
                            Forms\Components\TextInput::make('name_ar')->label('اسم الموقع')->required(),


                            Forms\Components\TextInput::make('address_en')->label('العنوان'),
                            TinyEditor::make('info_en')->label('من نحن'),

                        ]),

                        Forms\Components\Tabs\Tab::make('التركية')->schema([
                            Forms\Components\TextInput::make('name_tr')->label('اسم الموقع')->required(),


                            Forms\Components\TextInput::make('address_tr')->label('العنوان'),

                            TinyEditor::make('info_tr')->label('من نحن'),
                        ]),

                        Forms\Components\Tabs\Tab::make('وسائل التواصل')->schema([
                            Forms\Components\TextInput::make('phone')->label('رقم الهاتف')->required(),
                            Forms\Components\TextInput::make('sub_phone')->label('رقم الواتس')->required(),
                            Forms\Components\TextInput::make('twitter')->label('صفحة تويتر')->url(),
                            Forms\Components\TextInput::make('face')->label('صفحة فيس بوك')->url(),
                            Forms\Components\TextInput::make('instagram')->label('صفحة إنستغرام')->url(),
                            Forms\Components\TextInput::make('youtube')->label('قناة يوتيوب')->url(),
                            Forms\Components\TextInput::make('linkedin')->label('حساب لينكد إن')->url(),
                            Forms\Components\TextInput::make('email')->label('بريد إلكتروني رئيسي')->email(),
                            Forms\Components\TextInput::make('sub_email')->label('بريد إلكتروني ثانوي')->email(),

                            Forms\Components\Textarea::make('map')->label('كود الخريطة')





                        ]),

                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_ar')->label('اسم الموقع'),
                Tables\Columns\TextColumn::make('address_ar')->label('العنوان'),
                //Tables\Columns\TextColumn::make('map')->label('الخريطة')->html(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('settings'),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkResource\Pages;
use App\Filament\Resources\WorkResource\RelationManagers;
use App\Models\Work;
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

class WorkResource extends Resource
{
    protected static ?string $model = Work::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $label = 'عمل';
    protected static ?string $modelLabel = 'عمل';
    protected static ?string $pluralLabel = 'الاعمال';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(self::$pluralLabel)->schema([
                    SpatieMediaLibraryFileUpload::make('img')->collection('works')->label('الصورة'),
                    Forms\Components\BelongsToSelect::make('part_id')->relationship('part', 'name_ar')->label('المجموعة'),
                    TextArea::make('video')->nullable()->label('فيديو من يوتيوب'),

                    Forms\Components\Tabs::make('works')->tabs([

                        Forms\Components\Tabs\Tab::make('العربية')->schema([
                            Forms\Components\TextInput::make('title_ar')->label('العنوان')->required(),


                            Forms\Components\RichEditor::make('info_ar')->label('المقالة'),


                        ]),

                        Forms\Components\Tabs\Tab::make('الإنكليزية')->schema([
                            Forms\Components\TextInput::make('title_en')->label('العنوان')/*->reactive()->afterStateUpdated(function (Closure $set, $state) {
                                $set('slug', Str::slug($state));
                            })*/->required(),
                         //   Forms\Components\TextInput::make('slug')->required(),
                            Forms\Components\RichEditor::make('info_en')->label('المقالة'),


                        ]),

                        Forms\Components\Tabs\Tab::make('التركية')->schema([
                            Forms\Components\TextInput::make('title_tr')->label('العنوان'),
                            Forms\Components\RichEditor::make('info_tr')->label('المقالة'),


                        ]),

                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_ar')->label('العنوان بالعربية')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('part.name_ar')->label('المجموعة')->searchable()->sortable(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('works'),
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWork::route('/create'),
            'edit' => Pages\EditWork::route('/{record}/edit'),
        ];
    }
}

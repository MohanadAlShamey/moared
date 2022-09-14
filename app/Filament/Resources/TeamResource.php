<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $label='عضو في الفريق';
    protected static ?string $modelLabel='عضو في الفريق';
    protected static ?string $pluralLabel='فريقنا';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make(self::$pluralLabel)->schema([
                    SpatieMediaLibraryFileUpload::make('img')->collection('teams')->label('الصورة'),
                    Forms\Components\TextInput::make('email')->label('البريد الإلكتروني'),
                    Forms\Components\Tabs::make('teams')->tabs([
                        Forms\Components\Tabs\Tab::make('العربية')->schema([

                            Forms\Components\TextInput::make('name_ar')->required()->label('الاسم'),
                            Forms\Components\TextInput::make('job_ar')->required()->label('الوظيفة'),

                        ]),
                        Forms\Components\Tabs\Tab::make('الإنكليزية')->schema([

                            Forms\Components\TextInput::make('name_en')->required()->label('الاسم'),
                            Forms\Components\TextInput::make('job_en')->required()->label('الوظيفة'),
                        ]),

                        Forms\Components\Tabs\Tab::make('التركية')->schema([

                            Forms\Components\TextInput::make('name_tr')->required()->label('الاسم'),
                            Forms\Components\TextInput::make('job_tr')->required()->label('الوظيفة'),
                        ]),

                    ]),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_ar')->label('الاسم'),
                Tables\Columns\TextColumn::make('job_ar')->label('الوظيفة'),
                Tables\Columns\TextColumn::make('email')->label('البريد الإلكتروني'),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('teams'),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}

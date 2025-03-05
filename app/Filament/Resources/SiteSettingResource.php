<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingResource\Pages;
use App\Filament\Resources\SiteSettingResource\RelationManagers;
use App\Models\SiteSetting;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                //                
                TextInput::make('contact_email')
                    ->label('Contact Email')
                    ->required(),
                TextInput::make('contact_phone')  
                    ->label('Contact Phone')
                    ->required(),
                TextInput::make('contact_address_en')
                    ->label('Contact Address (English)')
                    ->required(),
                TextInput::make('contact_address_ar')    
                    ->label('Contact Address (Arabic)')
                    ->required(),
                Textarea::make('contact_desc_en')
                    ->label('Contact Description (English)')
                    ->rows(5)
                    ->required(),
                Textarea::make('contact_desc_ar')
                    ->label('Contact Description (Arabic)')
                    ->rows(5)
                    ->required(),
                TextInput::make('facebook')
                    ->label('Facebook'),
                TextInput::make('twitter')
                    ->label('Twitter'), 
                TextInput::make('instagram')
                    ->label('Instagram'),
                TextInput::make('youtube')
                    ->label('YouTube')
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('contact_phone'),
                TextColumn::make('contact_email')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSetting::route('/create'),
            'edit' => Pages\EditSiteSetting::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {       
     return static::getModel()::count() < 1;
    }
}

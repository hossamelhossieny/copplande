<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Date;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    
    public static function form(Form $form): Form
    {
        $localesFn = function () {
            // Return locales with labels
            return [
                'ar' => 'Arabic',
                'en' => 'English'
            ];
        };
        
        return $form
        ->schema([
            TextInput::make('title_en')
                ->label('Title (English)')
                ->required(),
            TextInput::make('title_ar')
                ->label('Title (Arabic)')
                ->required(),
            TextInput::make('desc_en')
                ->label('Description (English)')
                ->required(),
            TextInput::make('desc_ar')
                ->label('Description (Arabic)')
                ->required(),            

            Select::make('service_id')
                ->label('Service')
                ->options(Service::all()->pluck('title_en', 'id'))
                ->searchable(),
            
            DatePicker::make('delivery_date')
                ->label('Delivery Date')
                ->required(),

            TextInput::make('delivery_duration')
                ->label('Duration In Days')
                ->numeric()
                ->required(),
            
            Select::make('client_id')
                ->label('Client')
                ->options(Client::all()->pluck('company', 'id'))
                ->searchable(),
                     
            Radio::make('active')
                ->options([
                    true => 'Active',
                    false => 'InActive',
                ])
                ->default(true)
                ->boolean(),
            
            SpatieMediaLibraryFileUpload::make('attachments')
                ->multiple(),
                
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ToggleColumn::make('active'),
               TextColumn::make('title_en'),
               TextColumn::make('title_ar') 
                
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return ['en', 'ar'];
    }

   
}

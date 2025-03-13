<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubServiceResource\Pages;
use App\Filament\Resources\SubServiceResource\RelationManagers;
use App\Models\Service;
use App\Models\SubService;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SubServiceResource extends Resource
{


    protected static ?string $navigationGroup = 'All Services';
    protected static ?string $navigationLabel = 'Sub Services';
   
    protected static ?string $model = SubService::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('title_en')
                ->label('Title (English)')
                ->required(),
            TextInput::make('title_ar')
                ->label('Title (Arabic)')
                ->required(),
            Textarea::make('desc_en')
                ->label('Description (English)')
                ->required(),
            Textarea::make('desc_ar')
                ->label('Description (Arabic)')
                ->required(),
            FileUpload::make('image')
                ->label('Image')
                ->required(),

            Select::make('service_id')
                ->label('Service')
                ->options(Service::all()->pluck('title_en', 'id'))
                ->searchable()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\ImageColumn::make('image')
                ->label('Image')
                ->square(),
            Tables\Columns\TextColumn::make('title_en')
                ->label('Title (English)'),
            Tables\Columns\TextColumn::make('title_ar')
                ->label('Title (Arabic)'),
            Tables\Columns\TextColumn::make('service.title_en')
                ->label('Service'),
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
            'index' => Pages\ListSubServices::route('/'),
            'create' => Pages\CreateSubService::route('/create'),
            'edit' => Pages\EditSubService::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\InquiryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\CreateAction;
use Illuminate\Support\Facades\Auth;

class RepliesRelationManager extends RelationManager
{
    protected static string $relationship = 'replies';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('reply')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('reply')
            ->columns([
                Tables\Columns\TextColumn::make('reply'),
                Tables\Columns\TextColumn::make('from'),
                Tables\Columns\TextColumn::make('customer.name'),
                Tables\Columns\TextColumn::make('user.name')->label('Admin'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()->mutateFormDataUsing(function (array $data): array {
                   
                    $inquiry = $this->getOwnerRecord();
                        
                        $modifiedData = array_merge($data, [
                            'from' => 'admin',
                            'inquiry_id' => $inquiry->id,
                            'customer_id' => $inquiry->customer_id,
                            'user_id' => Auth::id(),
                        ]);
                    return $modifiedData;
                }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

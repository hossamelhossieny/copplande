<?php

namespace App\Filament\Resources\TaskResource\Pages;

use App\Filament\Resources\TaskResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;
 
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListTasks extends ListRecords
{
    protected static string $resource = TaskResource::class;

    protected function getHeaderActions(): array
    {
        return [
           
        ];
    }

    public function getTabs(): array
    {
        return [
            'InComing' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('to_user', Auth::id())),
            'OutGoing' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('from_user', Auth::id())),
        ];
    }
}

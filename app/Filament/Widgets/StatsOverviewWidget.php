<?php

namespace App\Filament\Widgets;

use App\Models\Client;
use App\Models\Inquiry;
use App\Models\Project;
use App\Models\Service;
use App\Models\Task;
use App\Models\Team;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Projects', Project::count())
                ->description('Total projects in the system')
                ->descriptionIcon('heroicon-m-document')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),

            Stat::make('Services', Service::count())
                ->description('Total services offered')
                ->descriptionIcon('heroicon-m-wrench-screwdriver')
                ->chart([3, 6, 9, 12, 15, 18, 21])
                ->color('primary'),

            Stat::make('Inquiries', Inquiry::count())
                ->description('Total customer inquiries')
                ->descriptionIcon('heroicon-m-chat-bubble-bottom-center-text')
                ->chart([15, 8, 12, 6, 10, 4, 9])
                ->color('warning'),

            Stat::make('Clients', Client::count())
                ->description('Total registered clients')
                ->descriptionIcon('heroicon-m-user-group')
                ->chart([5, 10, 15, 20, 25, 30, 35])
                ->color('danger'),

            Stat::make('Team Members', Team::count())
                ->description('Total team members')
                ->descriptionIcon('heroicon-m-user')
                ->chart([8, 12, 16, 14, 18, 22, 26])
                ->color('info'),

            Stat::make('Tasks', Task::count())
                ->description('Total tasks assigned')
                ->descriptionIcon('heroicon-m-clipboard-document-check')
                ->chart([10, 20, 15, 25, 20, 30, 25])
                ->color('success'),
        ];
    }
}
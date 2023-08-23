<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $us = Country::where("country_code", "us")->withCount("employees")->first();
        $uk = Country::where("country_code", "uk")->withCount("employees")->first();
        return [
            Card::make('All Employees', Employee::all()->count()),
            Card::make('United Kingdom Employees',  $uk->employees_count ?? 0),
            Card::make('United States Employees', $us->employees_count ?? 0),
        ];
    }
}

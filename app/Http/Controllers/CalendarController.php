<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class CalendarController extends Controller
{
    
    public function show($ym = null) 
    {    
        
        $protains = Auth::user()->protains->groupBy('date');
        
        $days = [];

        $dt = new Carbon($ym);
        $lastDayOfLastMonth = $dt->copy()->subMonth()->daysInMonth;
        $firstDayOfNextMonth = $dt->copy()->addMonth()->setDay(1);

        for ($h = $lastDayOfLastMonth - $dt->copy() ->subMonth()->setDay($lastDayOfLastMonth)->dayOfWeek; $h <= $lastDayOfLastMonth; $h++) { 
            $key = $dt->copy()->subMonth()->setDay($h)->format('Y-m-d');
            $days[$key] = $h;
        }

        for($i =1; $i <= $dt->daysInMonth; $i++){
            $key = $dt->copy() ->setDay($i)->format('Y-m-d');
            $days[$key] = $i;
        }

        for($j = 1; $j <= 7 - $firstDayOfNextMonth->dayOfWeek; $j++){
            $key = $dt  ->copy() -> addmonth()->setDays($j) ->format('Y-m-d');
            $days[$key] = $j;
        }
        
        $days = collect($days);
        $weeks = $days->chunk(7);
        $lastMonth = $dt->copy()->subMonth()->format('Y-m');
        $nextMonth = $dt->copy()->addMonth()->format('Y-m');
        $month = $dt ->copy()->format('Y-m');

        return view('calendars.record', [
            'weeks'=> $weeks,
            'protains'=> $protains,
            'nextMonth' => $nextMonth,
            'month' => $month,
            'lastMonth' => $lastMonth
        ]);
    }
    
    
}

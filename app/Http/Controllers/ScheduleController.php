<?php

namespace App\Http\Controllers;

use App\Consts\DayOfWeekConst;
use App\Libs\GetDays;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public $getDays;
    public $dayOfWeek;

    public function __construct(GetDays $getDays, DayOfWeekConst $dayOfWeek)
    {
        $this->getDays = $getDays;
        $this->dayOfWeek = $dayOfWeek;
    }

    public function form()
    {
        $dayOfWeekList = $this->dayOfWeek->getDayOfWeek();
        $dateList = $this->getDays->getMonthlyDays($dayOfWeekList);

        return view('schedules.form')->with([
            'dateList' => $dateList,
            'dayOfWeekList' => $dayOfWeekList
        ]);
    }
}

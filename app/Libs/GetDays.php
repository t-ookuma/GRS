<?php

namespace App\Libs;

use App\Consts\DayOfWeekConst;
use Carbon\Carbon;

class GetDays
{
    public function getMonthlyDays($dayOfWeek, $request)
    {
        if ($request->input('filter') == '') {
            $toMonth = new Carbon(now());
            $addMonth = $toMonth->copy()->addMonthNoOverflow()->format('Y-m');
            $startOfMonthlyDay = $toMonth->copy()->addMonthNoOverflow()->startOfMonth()->format('d');
            $endOfMonthlyDay = $toMonth->copy()->addMonthNoOverflow()->endOfMonth()->format('d');
            $dateList = [];
            for ($i = $startOfMonthlyDay; $i < $endOfMonthlyDay + 1; $i++) {
                if (strlen($i) == 1) {
                    $dateList[] = $addMonth . '-0' . $i . ' ' . $dayOfWeek[date('w', strtotime($addMonth . '-0' . $i))];
                } else {
                    $dateList[] = $addMonth . '-' . $i . ' ' . $dayOfWeek[date('w', strtotime($addMonth . '-' . $i))];
                }
            }
            return $dateList;
        } else {
            $filter = $request->input('filter');
            $toMonth = new Carbon(now());
            $addMonth = $toMonth->copy()->addMonthNoOverflow()->format('Y-m');
            $startOfMonthlyDay = $toMonth->copy()->addMonthNoOverflow()->startOfMonth()->format('d');
            $endOfMonthlyDay = $toMonth->copy()->addMonthNoOverflow()->endOfMonth()->format('d');
            $dateList = [];
            for ($i = $startOfMonthlyDay; $i < $endOfMonthlyDay + 1; $i++) {
                if (strlen($i) == 1 && $filter == date('w', strtotime($addMonth . '-0' . $i))) {
                    $dateList[] = $addMonth . '-0' . $i . ' ' . $dayOfWeek[date('w', strtotime($addMonth . '-0' . $i))];
                } elseif ($filter == date('w', strtotime($addMonth . '-' . $i))) {
                    $dateList[] = $addMonth . '-' . $i . ' ' . $dayOfWeek[date('w', strtotime($addMonth . '-' . $i))];
                }
            }
            return $dateList;
        }
    }
}

<?php

namespace App\Consts;

class DayOfWeekConst
{
    const LIST = [
        '(日)',
        '(月)',
        '(火)',
        '(水)',
        '(木)',
        '(金)',
        '(土)',
    ];

    public function getDayOfWeek()
    {
        return DayOfWeekConst::LIST;
    }
}

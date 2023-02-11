<?php

namespace App\Consts;

class TitleConst
{
    const TITLE_LIST = [
        'news' => [
            'title' => 'News',
            'subTitle' => 'お知らせ'
        ],
    ];

    public function getTitle($key)
    {
        return TitleConst::TITLE_LIST[$key]['title'];
    }

    public function getSubTitle($key)
    {
        return TitleConst::TITLE_LIST[$key]['subTitle'];
    }
}

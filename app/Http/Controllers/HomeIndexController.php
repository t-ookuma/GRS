<?php

namespace App\Http\Controllers;

use App\Consts\TitleConst;
use Illuminate\Http\Request;

class HomeIndexController extends Controller
{
    /**
     * @var TitleConst $titleConst
     */
    public function __construct(TitleConst $titleConst)
    {
        $this->titleConst = $titleConst;
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $title = $this->titleConst->getTitle('news');
        $subTitle = $this->titleConst->getSubTitle('news');

        return view('home.index')->with([
            'title' => $title,
            'subTitle' => $subTitle,
        ]);
    }
}
